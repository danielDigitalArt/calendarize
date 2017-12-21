<?php

declare(strict_types=1);

if (!(bool) \HDNET\Calendarize\Utility\ConfigurationUtility::get('disableDefaultEvent')) {
    \HDNET\Calendarize\Register::extTables(\HDNET\Calendarize\Register::getDefaultCalendarizeConfiguration());
    \TYPO3\CMS\Core\Category\CategoryRegistry::getInstance()
        ->add('calendarize', 'tx_calendarize_domain_model_event');
}
