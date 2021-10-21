<?php 
require_once('Producto.php');
class DB{

    private static $listaproductos=array();

    public static function obtieneProductos(){
        return self::$listaproductos;
    }

    public static function rellenaprincipio(){
        self::$listaproductos[1]=new Producto(array("cod"=>1, "nombre"=>"Leche", "nombre_corto"=>"Pep", "pvp"=>"2,50€"));
        self::$listaproductos[2]=new Producto(array("cod"=>2, "nombre"=>"Galletas", "nombre_corto"=>"Gall", "pvp"=>"1,99€"));
        self::$listaproductos[3]=new Producto(array("cod"=>3, "nombre"=>"Cereales", "nombre_corto"=>"Cer", "pvp"=>"2,99€"));
        self::$listaproductos[4]=new Producto(array("cod"=>4, "nombre"=>"Pan", "nombre_corto"=>"Pan", "pvp"=>"0'75€"));
        self::$listaproductos[5]=new Producto(array("cod"=>5, "nombre"=>"Pack 6 yogures", "nombre_corto"=>"yogur", "pvp"=>"3'00€"));
    }

    public static function altaproducto(Producto $p)
    {
        if(!isset(self::$listaproductos[$p->getCodigo()]))
        {
            self::$listaproductos[$p->getCodigo()]=$p;
        }
    }

    
}
?>