<?php

/**
 * This is the model class for table "estudio".
 *
 * The followings are the available columns in table 'estudio':
 * @property integer $idEstudios
 * @property string $institucion
 * @property integer $anioGraduacion
 * @property string $titulo
 * @property integer $usuario_idusuario
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioIdusuario
 */
class Estudio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Estudio the static model class
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
		return 'estudio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institucion, anioGraduacion, titulo, usuario_idusuario', 'required'),
			array('anioGraduacion, usuario_idusuario', 'numerical', 'integerOnly'=>true),
			array('institucion', 'length', 'max'=>120),
			array('titulo', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idEstudios, institucion, anioGraduacion, titulo, usuario_idusuario', 'safe', 'on'=>'search'),
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
			'idEstudios' => 'Id Estudios',
			'institucion' => 'Institucion',
			'anioGraduacion' => 'Anio Graduacion',
			'titulo' => 'Titulo',
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

		$criteria->compare('idEstudios',$this->idEstudios);
		$criteria->compare('institucion',$this->institucion,true);
		$criteria->compare('anioGraduacion',$this->anioGraduacion);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('usuario_idusuario',$this->usuario_idusuario);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}