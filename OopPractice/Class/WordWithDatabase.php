<?php
class WordWithDatabase
{
    // Biến lưu trữ kết nối
    private $__conn;
    // Hàm Kết Nối
    public function connect()
    {
        // Nếu chưa kết nối thì thực hiện kết nối
        if (!$this->__conn){
            // Kết nối
            $this->__conn = new mysqli('localhost', 'root', '123456', 'ControlData') or die ('Lỗi kết nối');
            // Để tránh lỗi font 
            $this->__conn->set_charset("utf8");
        }
    }
 
    // Hàm Ngắt Kết Nối
    public function disconnect(){
        // Nếu đang kết nối thì ngắt
        if ($this->__conn){
            mysqli_close($this->__conn);
        }
    }
 
    // Hàm Insert add
    public function insert($table, $data) //data sẽ ở dạng array
    {
        // Kết nối
        $this->connect();
        // Lưu trữ danh sách field
        $field_list = '';
        // Lưu trữ danh sách giá trị tương ứng với field
        $value_list = '';
        // Lặp qua data
        foreach ($data as $key => $value){
            $field_list .= ",$key";
            $value_list .= ",'".addslashes($value)."'";
        }
        // var_dump($value_list.'thấy chưa');
        // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES (N'.trim($value_list, ',').')';
 
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm Update edit
    public function update($table, $data, $where)
    {
        // Kết nối
        $this->connect();
        $sql = '';
        // Lặp qua data
        foreach ($data as $key => $value){
            $sql .= "$key = '".addslashes($value)."',";
            //mysql_escape_string($value) để trong trg hợp giá trị có những ký tự đặc biệt thì nó 
            //sẽ thêm \ vào trk ký tự đó để ký tự đó đc nhận vào và ko gây ra lỗi ví dụ như những ký tự " ' sẽ gây hiểu lầm về kết thúc chuỗi nên cần dấu\ ở trk nó
        }
        // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm delete
    public function remove($table, $where){
        // Kết nối
        $this->connect();
         
        // Delete
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm lấy danh sách
    public function getList($sql)
    {
        // Kết nối
        $this->connect();
        $result = mysqli_query($this->__conn, $sql);
        if (!$result){
            die ('Câu truy vấn bị sai');
        }
        $return = array();
        // Lặp qua kết quả để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)){
            $return[] = $row;
        }
        
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
        return $return;
    }

    // ham đếm để trong trg hợp xét xem dữ liệu đã tồn tại hay chưa nếu tồn tại >0 chưa thì < 0
    public function numRow($sql){
        $this->connect();
        $link= new mysqli('localhost', 'root', '', 'ControlData') or die ('Lỗi kết nối');
        $result=mysqli_query($link,$sql);
        $num_row=mysqli_num_rows($result);
        return $num_row;
    }

    // Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
    public function getRow($sql)
    {
        // Kết nối
        $this->connect();
        $result = mysqli_query($this->__conn, $sql);
        if (!$result){
            return 'ERROR';
        }
        $row = mysqli_fetch_assoc($result);
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
        if ($row){
            return $row;
        }
        return false;
    }
}

?>