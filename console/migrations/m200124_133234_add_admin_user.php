<?php

use yii\db\Migration;

/**
 * Class m200124_133234_add_admin_user
 */
class m200124_133234_add_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "insert into `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, 
                `updated_at`, `verification_token`) 
                values('1','superadmin','YxbAgB_EnTRG_mmRlr9Nwu0q9RuqXWBx','$2y$13$3zmmgkLrV9ZRVTKO4gMNdu0St7JJCtsH0Tu1tT1I03AGljIZE3GIa',NULL,'admin@admin.com','10','1579814383',
                '1579814383','FCLpWaeJgB7emNkZkJMPYkUbDhawWw4s_1579814383')";
        $this->execute($sql);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200124_133234_add_admin_user cannot be reverted.\n";

        return false;
    }
    */
}
