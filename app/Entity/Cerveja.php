<?php

  namespace App\Entity;

  use App\Db\Database;

  use \PDO;

  class Cerveja {
    
    public $id;
    public $marca;
    public $nome;
    public $estilo;
    public $descricao;
    public $imagem;

    public function cadastrar() {

      $obDatabase = new Database('cervejas');
      $this->id = $obDatabase->insert([
        'marca' => $this->marca,
        'nome' => $this->nome,
        'estilo' => $this->estilo,
        'descricao' => $this->descricao,
        'imagem' => $this->imagem
      ]);

      return true;
    }

    public function atualizar() {
      return (new Database('cervejas'))->update('id = '.$this->id,
        [
          'marca' => $this->marca,
          'nome' => $this->nome,
          'estilo' => $this->estilo,
          'descricao' => $this->descricao,
          'imagem' => $this->imagem
        ]
      );
    }

    public function excluir() {
      return (new Database('cervejas'))->delete('id = '.$this->id);
    }

    public static function getCervejas($where = null, $order = null, $limit = null) {
      return (new Database('cervejas'))->select($where,$order,$limit)
        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getCerveja($id) {
      return (new Database('cervejas'))->select('id = '.$id)
        ->fetchObject(self::class);
    }
  }