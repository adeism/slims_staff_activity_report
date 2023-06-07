Laporan Aktivitas Staf SLiMS 9 
----------------------------
log sistem ketika user melakukan update biblio, item, dan anggota masuk sebagai hitungan dalam laporan
----------------------------

//  system log for update bibliographic, item, mmember as part of the report | github.com/adeism

    function showBiblioEntries($obj_db, $array_data)
    {
        global $start_date, $until_date;
        $_count_q = $obj_db->query('SELECT COUNT(log_id) FROM system_log WHERE log_location=\'bibliography\' AND log_type=\'staff\'
            AND (log_msg LIKE \'%insert bibliographic data%\' OR log_msg LIKE \'%update bibliographic data%\')
            AND id=\''.$array_data['2'].'\' AND TO_DAYS(log_date) BETWEEN TO_DAYS(\''.$start_date.'\') AND TO_DAYS(\''.$until_date.'\')');
        $_count_d = $_count_q->fetch_row();
        return $_count_d[0];
    }

    function showItemEntries($obj_db, $array_data)
    {
        global $start_date, $until_date;
        $_count_q = $obj_db->query('SELECT COUNT(log_id) FROM system_log WHERE log_location=\'bibliography\' AND log_type=\'staff\'
            AND log_msg LIKE \'%insert item data%\' OR log_msg LIKE \'%update item data%\')
            AND id=\''.$array_data['3'].'\' AND TO_DAYS(log_date) BETWEEN TO_DAYS(\''.$start_date.'\') AND TO_DAYS(\''.$until_date.'\')');
        $_count_d = $_count_q->fetch_row();
        return $_count_d[0];
    }

    function showMemberEntries($obj_db, $array_data)
    {
        global $start_date, $until_date;
        $_count_q = $obj_db->query('SELECT COUNT(log_id) FROM system_log WHERE log_location=\'membership\' AND log_type=\'staff\'
            AND (log_msg LIKE \'%add new member%\' OR log_msg LIKE \'%update member data%\')
            AND id=\''.$array_data['4'].'\' AND TO_DAYS(log_date) BETWEEN TO_DAYS(\''.$start_date.'\') AND TO_DAYS(\''.$until_date.'\')');
        $_count_d = $_count_q->fetch_row();
        return $_count_d[0];
    }
// end 
