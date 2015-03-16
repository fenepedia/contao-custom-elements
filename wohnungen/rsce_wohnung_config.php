<?php

return array(
	'label' => array(
		'de' => array(
			'Wohnungen',
			'Liste Wohnungen',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'eigene',
	'standardFields' => array('cssID'),
	'fields' => array(
		'wohnung' => array(
			'label' => array(
				'de' => array(
					'Wohnung',
					'Fügen Sie eine beliebige Anzahl an Wohnungen ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Wohnung %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'name' => array(
					'label' => array(
						'de' => array('Name', 'Bezeichnung der Wohnung'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'flaeche' => array(
					'label' => array(
						'de' => array('Fläche', 'Gesamtfläche der Wohnung'),
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
				'status' => array(
					'label' => array(
						'de' => array('Status', 'Aktueller Status der Wohnung'),
							),
					'inputType' => 'select',
					'options' => array(
								'frei' => 'frei',
								'reserviert' => 'reserviert',
								'verkauft' => 'verkauft',
							),
					'eval' => array('tl_class' => 'w50'),
				),
				'image1' => array(
					'label' => array(
						'de' => array('Grundriss Wohnung', 'Grundriss der Wohnung 400x650'),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png,gif,svg',
						'tl_class' => 'clr long',
					),
				),
				'image2' => array(
					'label' => array(
						'de' => array('Position Wohnung', 'Position der Wohnung lt. Übersicht 300 x 150px'),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png,gif,svg',
						'tl_class' => 'clr long',
					),
				),		
				'barrierefrei' => array(
					'label' => array(
						'de' => array('barrierefrei möglich', 'barrierefrei möglich'),
							),
					'inputType' => 'checkbox',
					'eval' => array('tl_class' => 'm12 clr'),
				),
				'garten' => array(
					'label' => array(
						'de' => array('Garten möglich', 'Erwerb Gartengrundstück möglich'),
							),
					'inputType' => 'checkbox',
					'eval' => array('tl_class' => 'm12 clr'),
				),
				'gartengroesse' => array(
					'label' => array(
						'de' => array('Größe Garten', 'Größe Garten in qm'),
							),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),									
				'gartenpreis' => array(
					'label' => array(
						'de' => array('Kaufpreis Garten', 'Kaufpreis Gartenanlage'),
							),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),					
				'gartenimage' => array(
					'label' => array(
						'de' => array('Bild mit Garten', 'Bild mit Garten'),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png,gif,svg',
						'tl_class' => 'clr long',
					),
				),	
				'sonstiges' => array(
					'label' => array(
						'de' => array('Sonstiges', 'Sonstige Angaben'),
							),
					'inputType' => 'textarea',
					'eval' => array('tl_class' => 'long clr'),
				),					
				'raeume' => array(
					'label' => array(
						'de' => array(
							'Räume',
							'Fügen Sie eine beliebige Anzahl an Räumen ein.',
						),
					),
					'elementLabel' => array(
						'de' => '%s. Raum',
					),
					'inputType' => 'list',
					'fields' => array(
						'raumname' => array(
							'label' => array(
								'de' => array('Raum', 'Bezeichnung Raum'),
							),
							'inputType' => 'text',
							'eval' => array('tl_class' => 'w50'),
						),
						'raumqm' => array(
							'label' => array(
								'de' => array('Größe', 'Raumgröße in qm'),
							),
							'inputType' => 'text',
							'eval' => array('tl_class' => 'w50'),
						),
					),
				),
			),
		),
	),
);
