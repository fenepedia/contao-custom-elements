<?php

return array(
	'label' => array(
		'de' => array(
			'Stellplatz',
			'Liste Tiefgaragen Plätze',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'eigene',
	'standardFields' => array('cssID'),
	'fields' => array(
		'stellplatz' => array(
			'label' => array(
				'de' => array(
					'Stellplatz',
					'Fügen Sie eine beliebige Anzahl an Stellplätzen ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Stellplatz %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'name' => array(
					'label' => array(
						'de' => array('Name', 'Bezeichnung des Stellplatz'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'preis' => array(
					'label' => array(
						'de' => array('Preis', 'Kaufpreis'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'behinderung' => array(
					'label' => array(
						'de' => array('Behindertengerecht', 'Behindertengerecht'),
							),
					'inputType' => 'checkbox',
					'eval' => array('tl_class' => 'w50'),
				),
				'status' => array(
					'label' => array(
						'de' => array('Status', 'Aktueller Status des Stellplatz'),
							),
					'inputType' => 'select',
					'options' => array(
								'frei' => 'frei',
								'reserviert' => 'reserviert',
								'verkauft' => 'verkauft',
							),
					'eval' => array('tl_class' => 'w50'),
				),
			),
		),
	),
);
