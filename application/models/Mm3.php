<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Mm3 extends CI_Model {



    function __construct() {

        parent::__construct();

        $this->load->database();
		 $this->db2 = $this->load->database('default3',TRUE);
    }

	

	function get($table, $data = array(), $returnformat = 'rear'){

        if(!empty($data['select']))

            $this->db2->select($data['select'],false);

        $table = $this->db2->dbprefix($table);

		$this->db2->from($table);

        

        /*

        $data['join'] = array(

                            array('table1', 'table.a = table1.a', 'left|right'),

                            array('table2', 'table.b = table2.b', 'left|right')

                        );

        */

        if(!empty($data['join']) AND is_array($data['join'])){

            foreach($data['join'] as $jjoin){

                //$jjoin[0] = isset($jjoin[0]) ? $jjoin[0] : '';

                $jjoin[1] = isset($jjoin[1]) ? $jjoin[1] : '';

                $jjoin[2] = isset($jjoin[2]) ? $jjoin[2] : '';

                $this->db2->join($jjoin[0], $jjoin[1], $jjoin[2]);

            }

        }

        

        /*

        $data['where'] = array(

                            'id' => 'idnya',

                            'nama !=' => 'namanya'

                        );

        $data['where'] = array(

                            array('id', 'idnya'),

                            array('alamat !=', 'alamatnya')

                        );

        $data['where'] = "id = 'idnya' OR nama = 'namanya'";

        */

		if( !empty($data['where']) ){

            if(!empty($data['where'][0]) AND is_array($data['where'])){

                foreach($data['where'] as $wwhere){

                    $this->db2->where($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where'])){

                foreach($data['where'] as $kwhere => $vwhere){

                    $this->db2->where($kwhere, $vwhere);

                }

            } else {

                $this->db2->where( $data['where']);

            }

		}

		if( !empty($data['or_where']) ){

            if(isset($data['or_where'][0]) AND is_array($data['or_where'])){

                foreach($data['or_where'] as $wwhere){

                    $this->db2->or_where($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['or_where'])){

                foreach($data['or_where'] as $kwhere => $vwhere){

                    $this->db2->or_where($kwhere, $vwhere);

                }

            }

		}

        

        /*

        $data['where_in'] = array(

                            'id' => array(),

                            'alamat' => array()

                        );

        $data['where_in'] = array(

                            array('id', array())),

                            array('alamat', array()))

                        );

        */

		if( !empty($data['where_in']) ){

            if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                foreach($data['where_in'] as $wwhere){

                    $this->db2->where_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where_in'])){

                foreach($data['where_in'] as $kwhere => $vwhere){

                    $this->db2->where_in($kwhere, $vwhere);

                }

            }

		}

		if( !empty($data['or_where_in']) ){

            foreach($data['or_where_in'] as $wwhere){

                $this->db2->or_where_in($wwhere[0], $wwhere[1]);

            }

            if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                foreach($data['where_in'] as $wwhere){

                    $this->db2->where_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where_in'])){

                foreach($data['where_in'] as $kwhere => $vwhere){

                    $this->db2->where_in($kwhere, $vwhere);

                }

            }

		}

		if( !empty($data['where_not_in']) ){

            if(isset($data['where_not_in'][0]) AND is_array($data['where_not_in'])){

                foreach($data['where_not_in'] as $wwhere){

                    $this->db2->where_not_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where_not_in'])){

                foreach($data['where_not_in'] as $kwhere => $vwhere){

                    $this->db2->where_not_in($kwhere, $vwhere);

                }

            }

		}

		if( !empty($data['or_where_not_in']) ){

            if(isset($data['or_where_not_in'][0]) AND is_array($data['or_where_not_in'])){

                foreach($data['or_where_not_in'] as $wwhere){

                    $this->db2->or_where_not_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['or_where_not_in'])){

                foreach($data['or_where_not_in'] as $kwhere => $vwhere){

                    $this->db2->or_where_not_in($kwhere, $vwhere);

                }

            }

		}

        

        /*

        $data['like'] = array(

                            array('nama', 'namanya', 'before|after|both'),

                            array('alamat', 'alamatnya', 'before|after|both')

                        );

        */

        if(!empty($data['like']) AND is_array($data['like'])){

            foreach($data['like'] as $llike){

                //$llike[0] = isset($llike[0]) ? $llike[0] : '';

                $llike[1] = isset($llike[1]) ? $llike[1] : '';

                $llike[2] = isset($llike[2]) ? $llike[2] : '';

                $this->db2->like($llike[0], $llike[1], $llike[2]);

            }

        }

        if(!empty($data['or_like']) AND is_array($data['or_like'])){

            foreach($data['or_like'] as $llike){

                //$llike[0] = isset($llike[0]) ? $llike[0] : '';

                $llike[1] = isset($llike[1]) ? $llike[1] : '';

                $llike[2] = isset($llike[2]) ? $llike[2] : '';

                $this->db2->or_like($llike[0], $llike[1], $llike[2]);

            }

        }

			

		if( !empty($data['limit']) )

			$this->db2->limit( $data['limit'], (!empty($data['offset']) ? $data['offset']: '' ));

        

        /*

        $data['order'] = "nama asc, alamat desc";

        $data['order'] = array(

                            array('nama', 'asc'),

                            array('alamat', 'desc')

                        );

        */

		if( !empty($data['order']) ){

            if(is_array($data['order'])){

                foreach($data['order'] as $oorder){

                    $this->db2->order_by($oorder[0], $oorder[1]);

                }

            } else {

                $this->db2->order_by( $data['order'] );

            }

		}

			

		if (!empty($data['group_by']))

            $this->db2->group_by($data['group_by']);

		$query	= $this->db2->get();

        /*

        rear = result_array

        roar = row_array

        re = result

        ro = row

        */

        switch($returnformat){

            case 'rear' :

                return $query->result_array();

                break;

            case 'roar' :

                return $query->row_array();

                break;

            case 're' :

                return $query->result();

                break;

            case 'ro' :

                return $query->row();

                break;

        }

	}



	function count($table, $data = array()){

        $table = $this->db2->dbprefix($table);

		$this->db2->from($table);

        if(!empty($data['join']) AND is_array($data['join'])){

            foreach($data['join'] as $jjoin){

                //$jjoin[0] = isset($jjoin[0]) ? $jjoin[0] : '';

                $jjoin[1] = isset($jjoin[1]) ? $jjoin[1] : '';

                $jjoin[2] = isset($jjoin[2]) ? $jjoin[2] : '';

                $this->db2->join($jjoin[0], $jjoin[1], $jjoin[2]);

            }

        }

		if( !empty($data['where']) ){

            if(!empty($data['where'][0]) AND is_array($data['where'])){

                foreach($data['where'] as $wwhere){

                    $this->db2->where($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where'])){

                foreach($data['where'] as $kwhere => $vwhere){

                    $this->db2->where($kwhere, $vwhere);

                }

            } else {

                $this->db2->where( $data['where'] );

            }

		}

		if( !empty($data['or_where']) ){

            if(isset($data['or_where'][0]) AND is_array($data['or_where'])){

                foreach($data['or_where'] as $wwhere){

                    $this->db2->or_where($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['or_where'])){

                foreach($data['or_where'] as $kwhere => $vwhere){

                    $this->db2->or_where($kwhere, $vwhere);

                }

            }

		}

		if( !empty($data['where_in']) ){

            if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                foreach($data['where_in'] as $wwhere){

                    $this->db2->where_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where_in'])){

                foreach($data['where_in'] as $kwhere => $vwhere){

                    $this->db2->where_in($kwhere, $vwhere);

                }

            }

		}

		if( !empty($data['or_where_in']) ){

            foreach($data['or_where_in'] as $wwhere){

                $this->db2->or_where_in($wwhere[0], $wwhere[1]);

            }

            if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                foreach($data['where_in'] as $wwhere){

                    $this->db2->where_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where_in'])){

                foreach($data['where_in'] as $kwhere => $vwhere){

                    $this->db2->where_in($kwhere, $vwhere);

                }

            }

		}

		if( !empty($data['where_not_in']) ){

            if(isset($data['where_not_in'][0]) AND is_array($data['where_not_in'])){

                foreach($data['where_not_in'] as $wwhere){

                    $this->db2->where_not_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['where_not_in'])){

                foreach($data['where_not_in'] as $kwhere => $vwhere){

                    $this->db2->where_not_in($kwhere, $vwhere);

                }

            }

		}

		if( !empty($data['or_where_not_in']) ){

            if(isset($data['or_where_not_in'][0]) AND is_array($data['or_where_not_in'])){

                foreach($data['or_where_not_in'] as $wwhere){

                    $this->db2->or_where_not_in($wwhere[0], $wwhere[1]);

                }

            } else if(is_array($data['or_where_not_in'])){

                foreach($data['or_where_not_in'] as $kwhere => $vwhere){

                    $this->db2->or_where_not_in($kwhere, $vwhere);

                }

            }

		}

        if(!empty($data['like']) AND is_array($data['like'])){

            foreach($data['like'] as $llike){

                //$llike[0] = isset($llike[0]) ? $llike[0] : '';

                $llike[1] = isset($llike[1]) ? $llike[1] : '';

                $llike[2] = isset($llike[2]) ? $llike[2] : '';

                $this->db2->like($llike[0], $llike[1], $llike[2]);

            }

        }

        if(!empty($data['or_like']) AND is_array($data['or_like'])){

            foreach($data['or_like'] as $llike){

                //$llike[0] = isset($llike[0]) ? $llike[0] : '';

                $llike[1] = isset($llike[1]) ? $llike[1] : '';

                $llike[2] = isset($llike[2]) ? $llike[2] : '';

                $this->db2->or_like($llike[0], $llike[1], $llike[2]);

            }

        }
		
		
		// if (!empty($data['group_by']))

            // $this->db2->group_by($data['group_by']);

		// $query	= $this->db2->get();




		return $this->db2->count_all_results();

	}



    function save($table, $post, $data = array()){

        if(!empty($data)){

    		if( !empty($data['where']) ){

                if(!empty($data['where'][0]) AND is_array($data['where'])){

                    foreach($data['where'] as $wwhere){

                        $this->db2->where($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where'])){

                    foreach($data['where'] as $kwhere => $vwhere){

                        $this->db2->where($kwhere, $vwhere);

                    }

                } else {

                    $this->db2->where( $data['where'] );

                }

    		}

    		if( !empty($data['or_where']) ){

                if(isset($data['or_where'][0]) AND is_array($data['or_where'])){

                    foreach($data['or_where'] as $wwhere){

                        $this->db2->or_where($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['or_where'])){

                    foreach($data['or_where'] as $kwhere => $vwhere){

                        $this->db2->or_where($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['where_in']) ){

                if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                    foreach($data['where_in'] as $wwhere){

                        $this->db2->where_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where_in'])){

                    foreach($data['where_in'] as $kwhere => $vwhere){

                        $this->db2->where_in($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['or_where_in']) ){

                if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                    foreach($data['where_in'] as $wwhere){

                        $this->db2->where_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where_in'])){

                    foreach($data['where_in'] as $kwhere => $vwhere){

                        $this->db2->where_in($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['where_not_in']) ){

                if(isset($data['where_not_in'][0]) AND is_array($data['where_not_in'])){

                    foreach($data['where_not_in'] as $wwhere){

                        $this->db2->where_not_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where_not_in'])){

                    foreach($data['where_not_in'] as $kwhere => $vwhere){

                        $this->db2->where_not_in($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['or_where_not_in']) ){

                if(isset($data['or_where_not_in'][0]) AND is_array($data['or_where_not_in'])){

                    foreach($data['or_where_not_in'] as $wwhere){

                        $this->db2->or_where_not_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['or_where_not_in'])){

                    foreach($data['or_where_not_in'] as $kwhere => $vwhere){

                        $this->db2->or_where_not_in($kwhere, $vwhere);

                    }

                }

    		}

            $table = $this->db2->dbprefix($table);

            return $this->db2->update($table, $post);

        } else {

            $table = $this->db2->dbprefix($table);

    		$insert = $this->db2->insert($table, $post);

            if( $return = $this->db2->insert_id()){

                return $return;

            } else {

                return $insert;

            }

        }

    }



    function delete($table, $data = null){

        if(is_array($table)){

            $ntable = array();

            foreach($table as $vtable){

                $ntable[] = $this->db2->dbprefix($vtable);

            }

            $table = $ntable;

        } else {

            $table = $this->db2->dbprefix($table);

        }

        if(!empty($data)){

    		if( !empty($data['where']) ){

                if(!empty($data['where'][0]) AND is_array($data['where'])){

                    foreach($data['where'] as $wwhere){

                        $this->db2->where($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where'])){

                    foreach($data['where'] as $kwhere => $vwhere){

                        $this->db2->where($kwhere, $vwhere);

                    }

                } else {

                    $this->db2->where( $data['where'] );

                }

    		}

    		if( !empty($data['or_where']) ){

                if(isset($data['or_where'][0]) AND is_array($data['or_where'])){

                    foreach($data['or_where'] as $wwhere){

                        $this->db2->or_where($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['or_where'])){

                    foreach($data['or_where'] as $kwhere => $vwhere){

                        $this->db2->or_where($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['where_in']) ){

                if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                    foreach($data['where_in'] as $wwhere){

                        $this->db2->where_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where_in'])){

                    foreach($data['where_in'] as $kwhere => $vwhere){

                        $this->db2->where_in($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['or_where_in']) ){

                if(isset($data['where_in'][0]) AND is_array($data['where_in'])){

                    foreach($data['where_in'] as $wwhere){

                        $this->db2->where_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where_in'])){

                    foreach($data['where_in'] as $kwhere => $vwhere){

                        $this->db2->where_in($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['where_not_in']) ){

                if(isset($data['where_not_in'][0]) AND is_array($data['where_not_in'])){

                    foreach($data['where_not_in'] as $wwhere){

                        $this->db2->where_not_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['where_not_in'])){

                    foreach($data['where_not_in'] as $kwhere => $vwhere){

                        $this->db2->where_not_in($kwhere, $vwhere);

                    }

                }

    		}

    		if( !empty($data['or_where_not_in']) ){

                if(isset($data['or_where_not_in'][0]) AND is_array($data['or_where_not_in'])){

                    foreach($data['or_where_not_in'] as $wwhere){

                        $this->db2->or_where_not_in($wwhere[0], $wwhere[1]);

                    }

                } else if(is_array($data['or_where_not_in'])){

                    foreach($data['or_where_not_in'] as $kwhere => $vwhere){

                        $this->db2->or_where_not_in($kwhere, $vwhere);

                    }

                }

    		}

        }

        return $this->db2->delete($table);

    }



    function query($Q, $returnformat = 'rear'){

        $query = $this->db2->query($Q);

        switch($returnformat){

            case 'rear' :

                return $query->result_array();

                break;

            case 'roar' :

                return $query->row_array();

                break;

            case 're' :

                return $query->result();

                break;

            case 'ro' :

                return $query->row();

                break;

        }

    }

	function data_query($sql=null){
		return $this->db2->query($sql);	
	}



   //tambahan hendrax

	function insert_batch($table,$data)
   {
      $this->db2->insert_batch($table,$data);
	}

   function detail_pegawai($nipy)
   {
      $query = 'SELECT
                   yoloo_pegawai.nipy
                   , yoloo_pegawai.nama
                   , yoloo_pegawai.gelar_depan
                   , yoloo_pegawai.gelar_belakang
                   , yoloo_pegawai.tempat_lahir
                   , yoloo_pegawai.tanggal_lahir
                   , yoloo_pegawai.jenis_id_card
                   , yoloo_pegawai.nomor_id_card
                   , yoloo_pegawai.jenis_kelamin
                   , yoloo_pegawai.agama
                   , yoloo_pegawai.npwp
                   , yoloo_pegawai.status_pernikahan
                   , yoloo_pegawai.alamat_ktp
                   , yoloo_pegawai.desa_ktp_id
                   , yoloo_pegawai.kodepos_ktp
                   , yoloo_pegawai.alamat_rumah
                   , yoloo_pegawai.desa_rumah_id
                   , yoloo_pegawai.kodepos_rumah
                   , yoloo_pegawai.telpon
                   , yoloo_pegawai.telpon2
                   , yoloo_pegawai.email
                   , yoloo_pegawai.golongan_darah
                   , yoloo_pegawai.berat_badan
                   , yoloo_pegawai.tinggi_badan
                   , yoloo_pegawai.nidn
                   , yoloo_pegawai.tmt
                   , yoloo_pegawai.nomor_sk
                   , yoloo_pegawai.tanggal_sk
                   , yoloo_pegawai.tmt_80
                   , yoloo_pegawai.nomor_sk_80
                   , yoloo_pegawai.tanggal_sk_80
                   , yoloo_pegawai.golongan_awal
                   , yoloo_pegawai.jenis_bank
                   , yoloo_pegawai.nomor_rekening
                   , yoloo_pegawai.nama_rekening
                   , yoloo_pegawai.jenis_bank_pensiun
                   , yoloo_pegawai.nomor_rekening_pensiun
                   , yoloo_pegawai.nama_rekening_pensiun
                   , yoloo_pegawai.jumlah_tunjangan_anak
                   , yoloo_pegawai.jumlah_tunjangan_istri 
                   , yoloo_pegawai.nomor_bpjs
                   , yoloo_pegawai.tanggal_pensiun
                   , yoloo_pegawai.berkala_berikutnya
                   , yoloo_pegawai.pangkat_berikutnya
                   , yoloo_pegawai.gaji_pokok
                   , yoloo_pegawai.ipk
                   , yoloo_pegawai.id_jenjang
                   , yoloo_pegawai.id_pangkat
                   , yoloo_pegawai.tmt_pangkat_terakhir
                   , yoloo_pegawai.mkg_pangkat_terakhir
                   , yoloo_pegawai.id_jabatan_struktural
                   , yoloo_pegawai.id_jabatan_fungsional
                   , yoloo_pegawai.id_unit
                   , yoloo_pegawai.id_bagian
                   , yoloo_pegawai.id_sub_bagian
                   , yoloo_pegawai.id_status_pegawai
                   , yoloo_pegawai.id_status_pekerjaan
                   , yoloo_pegawai.id_fungsi_pegawai
                   , yoloo_pegawai.id_bidang_kepakaran
                   , yoloo_pegawai.foto
				   , yoloo_dr_gaji_pokok.nominal
                   , yoloo_dr_unit.induk
                   , yoloo_dr_unit.unit
                   , yoloo_dr_bagian.bagian
                   , yoloo_dr_sub_bagian.sub_bagian
                   , yoloo_dr_status_pekerjaan.status_pekerjaan
                   , yoloo_dr_status_pegawai.status_pegawai
                   , yoloo_dr_fungsi_pegawai.fungsi_pegawai
                   , yoloo_dr_jenis_pegawai.id_jenis_pegawai
                   , yoloo_dr_jenis_pegawai.jenis_pegawai
                   , yoloo_dr_pangkat.pangkat
                   , yoloo_dr_pangkat.golongan
                   , yoloo_dr_pangkat.urut_pangkat
                   , yoloo_dr_jenjang.jenjang
                   , yoloo_dr_jenjang.urut_jenjang
                   , yoloo_dr_bidang_kepakaran.bidang_kepakaran
                   , yoloo_dr_jabatan_struktural.jabatan_struktural
                   , yoloo_dr_jabatan_struktural.tunjangan as tunjangan_struktural
                   , yoloo_dr_jabatan_fungsional.jabatan_fungsional
                   , yoloo_dr_jabatan_fungsional.tunjangan as tunjangan_fungsional
				   , yoloo_rw_pinjaman_bank.jumlah_potongan as potongan
                   , yoloo_kodepos.desa
                   , yoloo_kodepos.dt2
                   , yoloo_kodepos.kecamatan
                   , yoloo_kodepos.kabupaten
                   , yoloo_kodepos.propinsi
				   
               FROM
                   yoloo_pegawai
                   LEFT JOIN yoloo_dr_unit
                       ON (yoloo_dr_unit.id_unit = yoloo_pegawai.id_unit)
                   LEFT JOIN yoloo_dr_sub_bagian
                       ON (yoloo_dr_sub_bagian.id_sub_bagian = yoloo_pegawai.id_sub_bagian)
                   LEFT JOIN yoloo_dr_status_pekerjaan
                       ON (yoloo_dr_status_pekerjaan.id_status_pekerjaan = yoloo_pegawai.id_status_pekerjaan)
                   LEFT JOIN yoloo_dr_status_pegawai
                       ON (yoloo_dr_status_pegawai.id_status_pegawai = yoloo_pegawai.id_status_pegawai)
                   LEFT JOIN yoloo_dr_pangkat
                       ON (yoloo_dr_pangkat.id_pangkat = yoloo_pegawai.id_pangkat)
                   LEFT JOIN yoloo_dr_jenjang
                       ON (yoloo_dr_jenjang.id_jenjang = yoloo_pegawai.id_jenjang)
                   LEFT JOIN yoloo_dr_fungsi_pegawai
                       ON (yoloo_dr_fungsi_pegawai.id_fungsi_pegawai = yoloo_pegawai.id_fungsi_pegawai)
                   LEFT JOIN yoloo_dr_jenis_pegawai
                       ON (yoloo_dr_jenis_pegawai.id_jenis_pegawai = yoloo_dr_fungsi_pegawai.id_jenis_pegawai)
                   LEFT JOIN yoloo_dr_jabatan_struktural
                       ON (yoloo_dr_jabatan_struktural.id_jabatan_struktural = yoloo_pegawai.id_jabatan_struktural)
                   LEFT JOIN yoloo_dr_jabatan_fungsional
                       ON (yoloo_dr_jabatan_fungsional.id_jabatan_fungsional = yoloo_pegawai.id_jabatan_fungsional)
                   LEFT JOIN yoloo_dr_bagian
                       ON (yoloo_dr_bagian.id_bagian = yoloo_pegawai.id_bagian)
                   LEFT JOIN yoloo_dr_bidang_kepakaran
                       ON (yoloo_dr_bidang_kepakaran.id_bidang_kepakaran = yoloo_pegawai.id_bidang_kepakaran)
					LEFT JOIN yoloo_dr_gaji_pokok 
						ON (yoloo_dr_gaji_pokok.id_pangkat = yoloo_dr_pangkat.id_pangkat)  
				   LEFT JOIN yoloo_rw_pinjaman_bank 
				   		ON (yoloo_pegawai.nipy = yoloo_rw_pinjaman_bank.nipy)
                   LEFT JOIN yoloo_kodepos
                       ON (yoloo_kodepos.desaID = yoloo_pegawai.desa_ktp_id)
               WHERE yoloo_pegawai.nipy="'.$nipy.'"';

      $result = $this->db2->query($query);

      return $result->row_array();
   }

	
    

    

 /***

 old pre

 heri.mardiansah@gmail.com

 ***/

	function insert( $table, $post = array() ) {

        $table = $this->db2->dbprefix($table);

		$insert = $this->db2->insert($table, $post);

        if( $return = $this->db2->insert_id()){

            return $return;

        } else {

            return $insert;

        }

	}

    

    function insert_duplicate_update($table, $post, $update){

        $table = $this->db2->dbprefix($table);

        $arrayKey = array_keys($post);

        $keys = implode(", ", $arrayKey);

        $values = implode("', '", $post);

        $q = "INSERT INTO `". $table ."` (". $keys .") VALUES ('". $values ."') ON DUPLICATE KEY UPDATE ". $update .";";

        $query = $this->db2->query($q);

        return $query;

    }

    

    function insert_ignore($table, $post){

        $table = $this->db2->dbprefix($table);

        $arrayKey = array_keys($post);

        $keys = implode(", ", $arrayKey);

        $values = implode("', '", $post);

        $q = "INSERT IGNORE INTO `". $table ."` (". $keys .") VALUES ('". $values ."')";

        $query = $this->db2->query($q);

        return $query;

    }

    

    function insert_ignore_batch($table, $keys, $values){

        $table = $this->db2->dbprefix($table);

        if(is_array($values)) $values = implode(", ", $values);

        $q = "INSERT IGNORE INTO `". $table ."` (". $keys .") VALUES ". $values ."";

        $query = $this->db2->query($q);

        return $query;

    }

	

    function get_insert($table, $returnIndex, $where, $post = array()){

        $table = $this->db2->dbprefix($table);

        if($data = $this->get_data($table, $where)){

            return $data[$returnIndex];

        } else {

            return $this->insert($table, $post);

        }

    }

        

   function getgaji($param) {
		
		if(!empty($param['select'])) $this->db2->select($param['select'],false);
		if (is_array($param['tabel'])) {
			$n = 1;
			foreach($param['tabel'] as $tab => $on) {

				if ($n > 1) {
					if (is_array($on)) $this->db2->join($tab,$on[0],$on[1]);
					else $this->db2->join($tab,$on);
				} else { $this->db2->from($tab); }
				$n+=1;
			}
		} else {
		$this->db2->from($param['tabel']);
		}
		if (!empty($param['where'])) {
			foreach($param['where'] as $w => $an) {
				if (!empty($an)) $this->db2->where($w,$an);
				else $this->db2->where($w,null,false);
			}
		}

      if (!empty($param['or_where'])) {
			foreach($param['or_where'] as $ow => $oan) {
				if (!empty($an)) $this->db2->or_where($ow,$oan);
				else $this->db2->or_where($ow,null,false);
			}
		}

		if (!empty($param['limit']) || !empty($param['offset'])) $this->db2->limit($param['limit'],$param['offset']);
        if (!empty($param['order'])) $this->db2->order_by($param['order']);
		if (!empty($param['search'])) {
			foreach($param['search'] as $sc => $vl) {
				$this->db2->or_like($sc,$vl);
			}
		}
		if (!empty($param['group_by'])) $this->db2->group_by($param['group_by']);
        return $this->db2->get();
		
	}
	
	
	
	function getnospt()
	{
		$q = $this->db2->query("select MAX(spt_no) as nospt from yoloo_data_spt");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$kd = ((int)$k->nospt)+1;
				
			}
		}
		else
		{
			$kd = "1";
		}	
		return $kd;
	}
	
	
	function getnosppd()
	{
		$q = $this->db2->query("select MAX(data_sppd_no) as nosppd from yoloo_data_sppd");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$kd = ((int)$k->nosppd)+1;
				
			}
		}
		else
		{
			$kd = "1";
		}	
		return $kd;
	}
  



}

