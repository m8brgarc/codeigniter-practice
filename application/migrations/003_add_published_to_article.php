<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_published_to_article extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_column('article', array(
            'published' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'null' => FALSE,
                'default' => 1
            )
        ));
    }

    public function down()
    {
        $this->dbforge->drop_column('article', 'published');
    }
}
