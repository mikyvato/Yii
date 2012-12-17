<?php

/**
 * This is the model class for table "experiencia".
 *
 * The followings are the available columns in table 'experiencia':
 * @property integer $idexperiencia
 * @property string $empresa
 * @property string $inicio
 * @property string $finalizacion
 * @property string $jefeInmediato
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdusuario
 */
class Experiencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Experiencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'experiencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empresa, inicio, jefeInmediato, usuario_idusuario', 'required'),
			array('usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('empresa, jefeInmediato', 'length', 'max'=>200),
			array('finalizacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idexperiencia, empresa, inicio, finalizacion, jefeInmediato, usuario_idusuario', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_idusuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idexperiencia' => 'Idexperiencia',
			'empresa' => 'Empresa',
			'inicio' => 'Inicio',
			'finalizacion' => 'Finalizacion',
			'jefeInmediato' => 'Jefe Inmediato',
			'usuario_idusuario' => 'Usuario Idusuario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idexperiencia',$this->idexperiencia);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('inicio',$this->inicio,true);
		$criteria->compare('finalizacion',$this->finalizacion,true);
		$criteria->compare('jefeInmediato',$this->jefeInmediato,true);
		$criteria->compare('usuario_idusuario',$this->usuario_idusuario);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}