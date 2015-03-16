<?php

return array(
	'label' => array(
		'de' => array(
			'Liste Links',
			'Eine Liste der Partner mit Name, Text, Link',
		),
	),
	'types' => array('content'),
	'contentCategory' => 'texts',
	'standardFields' => array('headline', 'cssID'),
	'fields' => array(
		'links' => array(
			'label' => array(
				'de' => array(
					'Links',
					'Fügen Sie eine beliebige Anzahl an Links ein.',
				),
			),
			'elementLabel' => array(
				'de' => 'Links %s',
			),
			'inputType' => 'list',
			'fields' => array(
				'name' => array(
					'label' => array(
						'de' => array('Name', 'Name / Überschrift'),
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
				'beschreibung' => array(
					'label' => array(
						'de' => array('Beschreibung', 'Beschreibungstext'),
					),
					'inputType' => 'textarea',
				),
			),
		),
	),
);
