<?php

/**
 * @package    contao-bootstrap
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @filesource
 *
 */

use ContaoBootstrap\Grid\Component\ContentElement\GridSeparatorElement;
use ContaoBootstrap\Grid\Component\ContentElement\GridStartElement;
use ContaoBootstrap\Grid\Component\ContentElement\GridStopElement;
use ContaoBootstrap\Grid\Component\FormField\GridSeparatorFormField;
use ContaoBootstrap\Grid\Component\FormField\GridStartFormField;
use ContaoBootstrap\Grid\Component\FormField\GridStopFormField;
use ContaoBootstrap\Grid\Model\GridModel;

// Models
$GLOBALS['TL_MODELS']['tl_bs_grid'] = GridModel::class;

// Modules
$GLOBALS['BE_MOD']['design']['themes']['tables'][] = 'tl_bs_grid';

// Content elements
$GLOBALS['TL_CTE']['bs_grid']['bs_gridStart']     = GridStartElement::class;
$GLOBALS['TL_CTE']['bs_grid']['bs_gridStop']      = GridStopElement::class;
$GLOBALS['TL_CTE']['bs_grid']['bs_gridSeparator'] = GridSeparatorElement::class;

// Form fields
$GLOBALS['TL_FFL']['bs_gridStart']     = GridStartFormField::class;
$GLOBALS['TL_FFL']['bs_gridSeparator'] = GridSeparatorFormField::class;
$GLOBALS['TL_FFL']['bs_gridStop']      = GridStopFormField::class;

// Wrapper elements
$GLOBALS['TL_WRAPPERS']['start'][]     = 'bs_gridStart';
$GLOBALS['TL_WRAPPERS']['separator'][] = 'bs_gridSeparator';
$GLOBALS['TL_WRAPPERS']['stop'][]      = 'bs_gridStop';
