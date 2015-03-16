<?php

return array(
	'label' => array(
		'de' => array(
			'Ansprechpartner',
			'Liste von Ansprechpartnern mit Bild, Name und Kontakt',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'eigene',
	'standardFields' => array('headline','cssID'),
	'fields' => array(
		'members' => array(
			'label' => array(
				'de' => array(
					'Ansprechpartner',
					'Fügen Sie eine beliebige Anzahl an Ansprechpartner ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Ansprechpartner %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'name' => array(
					'label' => array(
						'de' => array('Name', 'Ansprechpartner Vor- und Nachname'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'position' => array(
					'label' => array(
						'de' => array('Position', 'Position z.B. Baufinanzierungsexperte'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'telefon' => array(
					'label' => array(
						'de' => array('Telefon', 'Telefonnummer Bsp: 07561 8435 - 0'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'email' => array(
					'label' => array(
						'de' => array('E-Mail', 'E-Mailadresse Bsp: vorname.nachname@osb-immobilien.de'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50 crl'),
				),
				'image' => array(
					'label' => array(
						'de' => array('Bild', 'Größe: 130x200'),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png',
						'eval' => array('tl_class' => 'long')
					),
				),
			),
		),
	),
);
