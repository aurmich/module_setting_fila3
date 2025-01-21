<?php

declare(strict_types=1);

namespace Modules\Geo\Actions;

use Filament\Notifications\Notification;
use Modules\Geo\Datas\AddressData;

/**
 * Classe per ottenere i dati dell'indirizzo utilizzando diversi servizi di geocoding.
 */
class GetAddressDataFromFullAddressAction
{
    /**
     * Ottiene i dati dell'indirizzo da un indirizzo completo.
     *
     * @param string $fullAddress L'indirizzo da cercare
     *
     * @throws \RuntimeException Se la richiesta fallisce o l'indirizzo non viene trovato
     *
     * @return AddressData I dati dell'indirizzo trovato
     */
    public function execute(string $fullAddress): AddressData
    {
        $services = [
            GetAddressFromPhotonAction::class,
            GetAddressFromNominatimAction::class,
            GetAddressFromBingMapsAction::class,
            GetAddressFromGoogleMapsAction::class,
            // GetAddressFromHereMapsAction::class,
            // GetAddressFromMapboxAction::class,
            // GetAddressFromMapTilerAction::class,
            GetAddressFromOpenCageAction::class,
            // GetAddressFromOpenStreetMapAction::class,
            // GetAddressFromPeliasAction::class,
            // GetAddressFromTomTomAction::class,
        ];

        foreach ($services as $service) {
            try {
                $result = app($service)->execute($fullAddress);
                if ($result instanceof AddressData) {
                    return $result;
                }
            } catch (\Exception $e) {
                // Logga l'errore o gestiscilo in altro modo
            }
        }
        $message = 'Nessun servizio di geocoding ha restituito un risultato valido.';
        // throw new \RuntimeException('Nessun servizio di geocoding ha restituito un risultato valido.');
        Notification::make()
            ->title('Error')
            ->body($message)
            ->danger()
            ->persistent();

        return null;
    }
}
