<<<<<<< HEAD
<?php return array (
  'fields' => 
  array (
    'created_at' => 
    array (
      'label' => 'Data di creazione',
      'placeholder' => 'Seleziona data',
      'tooltip' => 'Data in cui è stato creato il record',
    ),
    'values' => 
    array (
      'label' => 'Valori',
      'placeholder' => 'Inserisci i valori',
      'tooltip' => 'Lista dei valori associati',
    ),
    'value' => 
    array (
      'label' => 'Valore',
      'placeholder' => 'Inserisci un valore',
      'tooltip' => 'Valore singolo',
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'esempio@dominio.it',
      'tooltip' => 'Indirizzo email valido',
    ),
    'password' => 
    array (
      'label' => 'Password',
      'placeholder' => 'Inserisci la password',
      'tooltip' => 'Password di accesso',
    ),
    'remember' => 
    array (
      'label' => 'Ricordami',
      'tooltip' => 'Mantieni la sessione attiva',
    ),
    'description' => 
    array (
      'label' => 'Descrizione',
      'placeholder' => 'Inserisci una descrizione',
      'tooltip' => 'Breve descrizione dell\'elemento',
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'tooltip' => 'Nome dell\'elemento',
    ),
    'id' => 
    array (
      'label' => 'ID',
      'tooltip' => 'Identificativo univoco',
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima modifica',
      'tooltip' => 'Data dell\'ultima modifica',
    ),
    'workgroup' => 
    array (
      'denominazione' => 
      array (
        'label' => 'Gruppo di lavoro',
        'placeholder' => 'Seleziona il gruppo',
        'tooltip' => 'Gruppo di lavoro associato',
      ),
    ),
    'data_inizio_esecuzione' => 
    array (
      'label' => 'Data inizio esecuzione',
      'placeholder' => 'Seleziona la data di inizio',
      'tooltip' => 'Data di inizio dell\'esecuzione',
    ),
    'data_fine_esecuzione' => 
    array (
      'label' => 'Data fine esecuzione',
      'placeholder' => 'Seleziona la data di fine',
      'tooltip' => 'Data di fine dell\'esecuzione',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
  ),
  'actions' => 
  array (
    'save' => 
    array (
      'label' => 'Salva',
      'tooltip' => 'Salva le modifiche',
    ),
    'cancel' => 
    array (
      'label' => 'Annulla',
      'tooltip' => 'Annulla le modifiche',
    ),
    'create' => 
    array (
      'label' => 'Crea nuovo',
      'tooltip' => 'Crea un nuovo elemento',
    ),
    'createAnother' => 
    array (
      'label' => 'Crea un altro',
      'tooltip' => 'Crea un altro elemento dopo questo',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'tooltip' => 'Modifica questo elemento',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'tooltip' => 'Elimina questo elemento',
    ),
    'associate' => 
    array (
      'label' => 'Associa',
      'tooltip' => 'Associa ad un elemento esistente',
    ),
    'dissociate' => 
    array (
      'label' => 'Dissocia',
      'tooltip' => 'Rimuovi l\'associazione',
    ),
    'attach' => 
    array (
      'label' => 'Collega',
      'tooltip' => 'Collega ad un elemento esistente',
    ),
    'detach' => 
    array (
      'label' => 'Scollega',
      'tooltip' => 'Rimuovi il collegamento',
    ),
  ),
);
=======
<?php

declare(strict_types=1);

return [
    'fields' => [
        'created_at' => [
            'fields' => 'created_at',
            'label' => 'Data di creazione',
        ],
        'values' => [
            'fields' => 'values',
            'label' => 'Valori',
        ],
        'value' => [
            'label' => 'Valore',
        ],
        'email' => [
            'label' => 'Email',
        ],
        'password' => [
            'label' => 'Password',
        ],
        'remember' => [
            'label' => 'Ricordami',
        ],
        'assetType' => [
            'name' => [
                'label' => 'Tipo di risorsa',
            ],
        ],
        'description' => [
            'label' => 'Descrizione',
        ],
        'parent_id' => [
            'label' => 'ID genitore',
        ],
        'technician_name' => [
            'label' => 'Nome tecnico',
        ],
        'serial_number' => [
            'label' => 'Numero di serie',
        ],
        'brand' => [
            'label' => 'Marca',
        ],
        'model' => [
            'label' => 'Modello',
        ],
        'area' => [
            'name' => [
                'label' => 'Area',
            ],
        ],
        'save' => [
            'label' => 'Salva',
        ],
        'cancel' => [
            'label' => 'Annulla',
        ],
        'creator' => [
            'name' => [
                'label' => 'Creatore',
            ],
        ],
        'isActive' => [
            'label' => 'Attivo',
        ],
        'password_expires_at' => [
            'label' => 'Scadenza password',
        ],
        'email_verified_at' => [
            'label' => 'Email verificata il',
        ],
        'file' => [
            'label' => 'File',
        ],
        'updated_at' => [
            'label' => 'Ultima modifica',
        ],
        'name' => [
            'label' => 'Nome',
        ],
        'id' => [
            'label' => 'ID',
        ],
        'roles' => [
            'name' => [
                'label' => 'roles.name',
            ],
        ],
        'role' => [
            'name' => [
                'label' => 'role.name',
            ],
        ],
        'teams' => [
            'name' => [
                'label' => 'teams.name',
            ],
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'openFilters' => [
            'label' => 'openFilters',
        ],
        'geocomplete' => [
            'label' => 'geocomplete',
        ],
        'radius' => [
            'label' => 'radius',
        ],
        'unit' => [
            'label' => 'unit',
        ],
        'latitude' => [
            'label' => 'latitude',
        ],
        'longitude' => [
            'label' => 'longitude',
        ],
    ],
    'actions' => [
        'save' => [
            'label' => 'Salva',
        ],
        'cancel' => [
            'label' => 'Annulla',
        ],
        'authenticate' => [
            'label' => 'Autentica',
        ],
        'downloadExample' => [
            'label' => 'Scarica esempio',
        ],
        'create' => [
            'label' => 'Crea',
        ],
        'createAnother' => [
            'label' => 'Crea un altro',
        ],
    ],
];
>>>>>>> origin/dev
