<?php
/**
 * Created by IntelliJ IDEA.
 * User: codetwister
 * Date: 7/10/11
 * Time: 9:57 PM
 * To change this template use File | Settings | File Templates.
 */
 
class ProductLangModel extends ActiveRecord\Model {
    static $table_name = 'products_lang';
    static $fields = array('name', 'keywords','short_desc', 'description');
    static $lang_id_field = 'language_id';
}
