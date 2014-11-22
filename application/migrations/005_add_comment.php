<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_comment extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'author' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'text' => array(
                'type' => 'TEXT',
                'constraint' => 32000
            ),
            'rating' => array(
                'type' => 'INT',
                'constraint' => 1,
                'null' => FALSE,
                'default' => 1
            ),
            'updated_at' => array(
                'type' => 'DATETIME'
            ),
            'created_at' => array(
                'type' => 'DATETIME'
            ),
            'blog_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key(array('blog_id'));
        $this->dbforge->create_table('comment');
    }

    public function down()
    {
        $this->dbforge->drop_table('comment');
    }
}