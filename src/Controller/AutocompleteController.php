<?php
namespace App\Controller;
use App\Model\Entity\Country;
use App\Model\Table\CountriesTable;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class AutocompleteController extends AppController
{
    public function index()
    {
        $this->render('autocomplete');
    }

    public function fetch()
    {
        $this->autoRender = false;
        $query = $this->request->getQuery('query');
        $countriesTable = $this->getTableLocator()->get('Countries');
        $data = $countriesTable->find()
            ->where(['country_name LIKE' => '%' . $query . '%'])
            ->toArray();
           // debug($data);
        $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
       
        foreach ($data as $row) {
       
      
            $output .= '<li><a class="dropdown-item" href="#">' . $row->country_name . '</a></li>';
          
        }
        $output .= '</ul>';
       
        echo($output);
        
    }
}