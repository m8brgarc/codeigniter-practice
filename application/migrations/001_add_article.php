<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_article extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'auto-increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'length' => 50
            ),
            'author' => array(
                'type' => 'VARCHAR',
                'length' => 50
            ),
            'text' => array(
                'type' => 'TEXT',
                'length' => 32000
            ),
            'date_posted' => array(
                'type' => 'DATETIME'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('article');
    }

    public function down()
    {
        $this->dbforge->drop_table('article');
    }
}