<?php

namespace App\Http\Bases;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

/**
 * Clase BaseRepository Contiene métodos de persistencia y consulta de datos.
 *
 * @package App\Http\Bases
 */
class BaseRepository
{
    /**
     * @var Model Modelo.
     */
    protected Model $model;

    /**
     * Método constructor.
     *
     * @param Model $model
     */
    function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Consultar un registro por el id.
     *
     * @param int $id Id a consultar.
     *
     * @return ?Model Objeto obtenido de la base de datos.
     */
    public function findById(int $id): ?Model
    {
        return $this->model->find($id);
    }



    /**
     * Returns all the related instances in model table
     * @return mixed with all instances
     */
    public function findByColumn(String $column, mixed $value): mixed
    {
        $query = $this->model->select(get_class($this->model)::$index_columns)->where($column,$value);
        //dd($query->first());
        return $query->get();
    }



    /**
     * Returns all the related instances in model table
     * @return mixed with all instances
     */
    public function index(Request $request)
    {
        $query = $this->model->select(get_class($this->model)::$index_columns);

        if ( isset($request->per_page) ){
            return $query->paginate($request->per_page);
        }

        return $query->get();
    }

    /**
     * Returns all the related instances in model table
     * @return mixed with all instances
     */
    public function indexQuery(): Builder
    {
        $query = $this->model->select(get_class($this->model)::$index_columns);
        return $query;
    }




    /**
     * Crear registro en base de datos.
     *
     * @param array $attributes Atributos del registro a crear.
     *
     * @return mixed
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }


    /**
     * update or insert varios registros en base de datos.
     *
     * @param array $attributes Atributos del registro a crear o actualziar .
     * @param mixed $column o columnas por la cual se considera clave unica verificar si existe en la base de datos
     *
     * @return int
     */
    //TODO: UPSERT RETORNA ERROR AL NO SER LOS ATRIBUTOS IGUALES A LAS COLUMNAS.
    //TODO: HACER UNA INTERSECCION ENTRE LOS ATRIBUTOS Y LOS FILLABLE DEL MODEL
    public function upsert(array $attributes,mixed $column): int
    {

        // $this->model->map( function ($data) use ($key){
        //     $data['uuid'] = $key;

        //     return $data;
        // });
        // dd(gettype($this->model->upsert($attributes,$key)));
        return $this->model->upsert($attributes ,$column);
    }


    /**
     * Crear registro en base de datos.
     *
     * @param array $attributes Atributos del registro a crear.
     *
     * @return mixed
     */
    public function updateOrCreate(mixed $conditions,array $attributes): Model
    {
        return $this->model->updateOrCreate($conditions,$attributes);
    }

    /**
     * Crear registro en base de datos.
     *
     * @param int $id Id a consultar.
     * @param array $attributes Atributos del registro a crear.
     *
     * @return Model Modelo actualizado.
     */
    public function update(string $id, array $attributes): Model
    {
        $model = $this->model->findOrFail($id);

        $model->fill($attributes);

        $model->save();

        return $model;
    }

    /**
     * Delete given instance in document_types table
     * @param instance to be deleted
     * @return bool|null
     */
    public function destroy(Model $object)
    {
        return $object->delete();
    }
}
