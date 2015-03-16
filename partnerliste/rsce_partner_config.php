<?php

return array(
	'label' => array(
		'de' => array(
			'Liste Partner',
			'Eine Liste der Partner mit Name, Logo, Link',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline', 'cssID'),
	'fields' => array(
		'partners' => array(
			'label' => array(
				'de' => array(
					'Partner',
					'Fügen Sie eine beliebige Anzahl an Partnern ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Partner %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'image' => array(
					'label' => array(
						'de' => array('Logo', 'Logo in Größe 120 x 120'),
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
						'de' => array('Name', 'Name Partner'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
				'mylink' => array(
					'label' => array(
						'de' => array('Website - ohne http', 'URL: www.domain.de ohne http'),
					),
					'inputType' => 'text',
					'eval' => array('tl_class' => 'w50'),
				),
			),
		),
	),
);
