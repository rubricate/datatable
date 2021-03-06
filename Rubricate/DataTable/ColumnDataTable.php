<?php 

namespace Rubricate\DataTable;

use Rubricate\Element\CreateElement;
use Rubricate\Element\IGetElement;
use Rubricate\Element\StrElement;


class ColumnDataTable implements IGetElement
{
    private $e;
    
    public function __construct($data, array $attr = array())
    {
        $this->e = new CreateElement('td');
        $this->e->addChild(new StrElement($data));

        if(count($attr)) {
            foreach ($attr as $key => $value)
            {
                $this->e->setAttribute($key, $value);
            }
        }
    }

    public function getElement()
    {
        return $this->e->getElement();
    } 
    
    
    
}    

