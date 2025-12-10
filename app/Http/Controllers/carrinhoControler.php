<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Wishlist;
use App\Models\Meus_Jogos;
use App\Models\Jogos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carrinhoControler extends Controller
{
    // --- FUNÇÃO ADICIONAR AO CARRINHO ---
    public function add(Request $request, $id_jogo)
    {
        $user = Auth::user();

        // 1. Verifica se o jogo existe
        $jogo = Jogos::find($id_jogo);
        if (!$jogo) {
            return redirect()->back()->with('error', 'Jogo não encontrado.');
        }

        // 2. Verifica se o usuário JÁ TEM o jogo na biblioteca
        if ($user->hasGame($id_jogo)) {
            return redirect()->back()->with('error', 'Você já possui este jogo na sua biblioteca.');
        }

        // 3. Verifica se o jogo JÁ ESTÁ no carrinho (evitar duplicidade)
        $jaNoCarrinho = Carrinho::where('fk_carrinho_to_user', $user->user_id)
                                ->where('fk_carrinho_to_jogos', $id_jogo)
                                ->exists();

        if ($jaNoCarrinho) {
            return redirect()->back()->with('info', 'Este jogo já está no seu carrinho.');
        }

        // 4. Adiciona ao Carrinho
        Carrinho::create([
            'fk_carrinho_to_user'  => $user->user_id,
            'fk_carrinho_to_jogos' => $id_jogo
        ]);

        return redirect()->back()->with('success', 'Jogo adicionado ao carrinho!');
    }


    // --- FUNÇÃO CONFIRMAR COMPRA (PROCESSAR O CARRINHO INTEIRO) ---
    public function confirmCompra()
    {
        $user = Auth::user();

        // 1. Busca todos os itens do carrinho deste usuário
        $itensCarrinho = Carrinho::where('fk_carrinho_to_user', $user->user_id)->get();

        if ($itensCarrinho->isEmpty()) {
            return redirect()->back()->with('error', 'Seu carrinho está vazio.');
        }

        // Usamos Transaction para garantir que tudo aconteça ou nada aconteça (segurança de dados)
        DB::transaction(function () use ($user, $itensCarrinho) {

            foreach ($itensCarrinho as $item) {
                $id_jogo = $item->fk_carrinho_to_jogos;

                // A. Adiciona à Biblioteca (se ainda não tiver)
                if (!$user->hasGame($id_jogo)) {
                    Meus_Jogos::create([
                        'fk_meus_jogos_to_user'  => $user->user_id,
                        'fk_meus_jogos_to_jogos' => $id_jogo
                    ]);
                }

                // B. Remove da Wishlist (se estiver lá)
                // Usamos delete direto para otimizar
                Wishlist::where('fk_wishlist_to_user', $user->user_id)
                        ->where('fk_wishlist_to_jogos', $id_jogo)
                        ->delete();
            }

            // C. ESVAZIAR O CARRINHO após a compra
            Carrinho::where('fk_carrinho_to_user', $user->user_id)->delete();
        });

        return redirect()->route('biblioteca')->with('success', 'Compra realizada com sucesso! Todos os jogos foram adicionados à sua biblioteca.');
    }
}
