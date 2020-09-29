<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $karyawan_oc = [
		'nama_karyawan'    => 'required',
		'tmpt_lahir'       => 'required',
		'tgl_lahir'		   => 'required',
	];
	 
	public $karyawan_oc_errors = [
		'nama_karyawan'=> [
			'required'  => 'Nama karyawan wajib diisi.'
		],
		'tmpt_lahir'=> [
			'required'  => 'Tempat lahir wajib diisi.'
		],
		'tgl_lahir'=> [
			'required'  => 'Tanggal lahir wajib diisi.'
		]
	];
}
