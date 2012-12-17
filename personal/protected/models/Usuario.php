<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idusuario
 * @property string $nombres
 * @property string $identificacion
 * @property string $email
 * @property integer $estado
 * @property string $genero
 * @property integer $ciudad_idciudad
 *
 * The followings are the available model relations:
 * @property Estudio[] $estudios
 * @property Experiencia[] $experiencias
 * @property Folio[] $folios
 * @property Ciudad $ciudadIdciudad
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, identificacion, email, genero, ciudad_idciudad', 'required'),
			array('estado, ciudad_idciudad', 'numerical', 'integerOnly'=>true),
			array('nombres', 'length', 'max'=>80),
			array('identificacion', 'length', 'max'=>45),
			array('email', 'length', 'max'=>120),
			array('genero', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idusuario, nombres, identificacion, email, estado, genero, ciudad_idciudad', 'safe', 'on'=>'search'),
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
			'estudios' => array(self::HAS_MANY, 'Estudio', 'usuario_idusuario'),
			'experiencias' => array(self::HAS_MANY, 'Experiencia', 'usuario_idusuario'),
			'folios' => array(self::HAS_MANY, 'Folio', 'usuario_idusuario'),
			'ciudadIdciudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_idciudad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuario' => 'Idusuario',
			'nombres' => 'Nombres',
			'identificacion' => 'Identificacion',
			'email' => 'Email',
			'estado' => 'Estado',
			'genero' => 'Genero',
			'ciudad_idciudad' => 'Ciudad',
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

		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('identificacion',$this->identificacion,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('ciudad_idciudad',$this->ciudad_idciudad);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}