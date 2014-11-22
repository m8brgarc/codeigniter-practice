<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_fields_to_article extends CI_Migration {

    public function up()
    {
        $this->dbforge->drop_column('article', 'date_posted');
        $this->dbforge->add_column('article', array(
            'updated_at' => array(
                'type' => 'DATETIME'
            ),
            'created_at' => array(
                'type' => 'DATETIME'
            )
        ));
    }

    public function down()
    {
        $this->dbforge->drop_column('article', 'updated_at');
        $this->dbforge->drop_column('article', 'created_at');
        $this->dbforge->add_column('article', array(
            'date_posted' => array(
                'type' => 'DATETIME'
            )
        ));
    }
}