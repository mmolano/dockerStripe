<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Customer;
use Stripe\Stripe;

class CardsController extends Controller
{
    public function getCards(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_KEY_SECRET'));
        if (empty($request->stripeId)) {
            return response()->json([
                'error' => [
                    'message' => 'Erreur avec la base de donnée, veuillez contacter un administrateur'
                ]
            ], 202);
        }
        $userStripe = Customer::retrieve($request->stripeId);
        $cards = $userStripe->sources->data;

        return response()->json([
            'success' => [
                'defaultCard' => $userStripe->default_source,
                'cards' => $cards
            ]
        ], 202);
    }

    public function newCard(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_KEY_SECRET'));

        try {
            Customer::createSource($request->stripeId, ['source' => $request->tokenId]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => [
                    'message' => 'erreur lors de l\'ajout de la carte'
                ]
            ], 202);
        }

        return response()->json([
            'success' => [
                'message' => 'Carte bancaire ajoutée avec succès',
            ]
        ], 202);
    }

    public function deleteCard(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_KEY_SECRET'));

        try {
            Customer::deleteSource($request->stripeId, $request->cardId);
        } catch (\Exception $e) {
            return response()->json([
                'error' => [
                    'message' => 'erreur lors de la suppression de la carte'
                ]
            ], 202);
        }
        return response()->json([
            'success' => [
                'message' => 'Card has been deleted'
            ]
        ], 202);
    }

    public function setDefaultCard(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_KEY_SECRET'));

        try {
            Customer::update($request->stripeId, [
                'default_source' => $request->cardId,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => [
                    'message' => 'erreur lors du changement de carte'
                ]
            ], 202);
        }
        return response()->json([
            'success' => [
                'message' => 'New default card has been set'
            ]
        ], 202);
    }
}
