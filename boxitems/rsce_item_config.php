<?php

return array(
	'label' => array(
		'de' => array(
			'Liste Elemente',
			'Eine Liste an Elementen',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline', 'cssID'),
	'fields' => array(
		'partners' => array(
			'label' => array(
				'de' => array(
					'Element',
					'Fügen Sie eine beliebige Anzahl an Elementen ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Element %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'image' => array(
					'label' => array(
						'de' => array('Bild', 'Bild in Größe 100 x 100'),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png,gif,svg',
					),
				),
				'name' => array(
					'label' => array(
						'de' => array('Beschreibung', 'Text'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'preis' => array(
					'label' => array(
						'de' => array('Preis', 'Preis z.B. 250 EUR'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'image2' => array(
					'label' => array(
						'de' => array('Lightbox-Image', 'Bild für Details'),
					),
					'inputType' => 'fileTree',
					'eval' => array(
						'fieldType' => 'radio',
						'filesOnly' => true,
						'extensions' => 'jpg,jpeg,png,gif,svg',
					),
				),
			),
		),
	),
);
