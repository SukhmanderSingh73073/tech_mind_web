<?php

function saveDataIntoDb($tempData)
{

    $data = array();
    foreach ($tempData as $key => $value) {
        $data[$value['Field']] = $value['Value'];
    }
    $saveData['first_name'] = $data['firstName'];
    $saveData['last_name'] = $data['lastName'];
    $saveData['other_names'] = $data['middleName'];
    $saveData['email'] = $data['email'];
    $saveData['password'] = $data['password']?$data['password']:$data['firstName']+$data['phoneNumber'];
    $saveData['password_confirmation'] = $data['password']?$data['password']:$data['firstName']+$data['phoneNumber'];
    $saveData['fname'] = $data['fatherName'];
    $saveData['f_occupation'] = $data['fatherOccupation'];
    $saveData['mname'] = $data['motherName'];
    $saveData['m_occupation'] = $data['motherOccupation'];
    $saveData['birthday'] = $data['dob'];
    $saveData['gender'] = $data['gender'];
    $saveData['blood_group'] = $data['bloodGroup'];
    $saveData['phone'] = $data['phoneNumber'];
    $saveData['aadhaar_number'] = $data['adharNumber'];
    $saveData['address'] = $data['address'];
    $saveData['previous_school'] = $data['previousSchool'];
    $saveData['nationality'] = $data['nationality'];
    $saveData['state'] = $data['state'];
    $saveData['city'] = $data['city'];
    $saveData['tehsil'] = $data['tehsil'];
    $saveData['locality'] = $data['locality'];
    $saveData['religion'] = $data['religion'];
    $saveData['caste'] = $data['cast'];
    $saveData['sub_caste'] = $data['subCast'];
    $saveData['my_class_id'] = $data['className'];
    $saveData['section_id'] = $data['section'];
    $saveData['sr_no'] = $data['srNo'];
    $saveData['roll_no'] = $data['rollNo'];
    $saveData['admission_number'] = $data['admissionNumber'];
    $saveData['admission_date'] = $data['admissionDate'];
    $saveData['_token'] = $data['_token'];
    $saveData["role_type"] = $data['roleType'];

    // $saveData[$data['profile_photo']] = $data['rammmm'];
    dd($saveData);

    return $data;
}

function csvToArray($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}
