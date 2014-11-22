<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_blog extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'author' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'text' => array(
                'type' => 'TEXT',
                'constraint' => 32000
            ),
            'published' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'null' => FALSE,
                'default' => 1
            ),
            'updated_at' => array(
                'type' => 'DATETIME'
            ),
            'created_at' => array(
                'type' => 'DATETIME'
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('blog');
    }

    public function down()
    {
        $this->dbforge->drop_table('blog');
    }
}