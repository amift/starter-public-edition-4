<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2015
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

class Lex_parser_controller extends Base_Controller {

    public function __construct() {

        parent::__construct();

        $this->load
            ->language('welcome')
            ->helper('text')
            ->helper('inflector')
            ->helper('url')
        ;

        $this->template
            ->title('Lex Parser Test')
        ;

        $this->registry->set('nav', 'playground/lex');
    }

    public function index() {

        $php_min = '5.3';

        if (!is_php($php_min)) {

            $this->output->set_output('PHP '.$php_min.' is required for Lex parser.');
            return;
        }

        $countries = $this->_get_country_data();
        $countries_10 = array_slice($countries, 0, 10);

        $this->template
            ->set('br', '<br />')
            ->set('hr', '<hr />')
            ->set('name', 'John')
            ->set('array_1', array('one', 'two', 'three'))
            ->set('array_2', array('one', 'two', 'three', array('four', 'five')))
            ->set('string_123', 'one, two, three')
            ->set('very_long_text', 'Very long text. Very long text. Very long text. Very long text.')
            ->set('value_0', 0)
            ->set('value_1', 1)
            ->set('value_2', 2)
            ->set('value_3', 3)
            ->set('dog', "I'll \"walk\" the <b>dog</b> now.")
            ->set('dog_entities', htmlentities("I'll \"walk\" the <b>dog</b> now.", ENT_QUOTES, 'UTF-8'))
            ->set('countries', $countries)
            ->set('countries_10', $countries_10)
            ->set('with_a_new_line', "a new\nline")
            ->enable_parser_body('lex')
            ->build('lex_parser.lex.html');
    }

    protected function _get_country_data() {

        $csv = (string) @ file_get_contents(APPPATH.'demo_data/countries.csv');

        $items = preg_split('/\r\n|\r|\n/m', $csv, null, PREG_SPLIT_NO_EMPTY);

        foreach ($items as & $item) {

            $values = explode(';', $item);
            $item = (array('code' => $values[0], 'name' => $values[1]));
        }

        return $items;
    }

}
