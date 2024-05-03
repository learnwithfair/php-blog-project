<?php
class blogProject {
    private $conn;
    public function __CONSTRUCT() {
        $bdhost     = "localhost";
        $dbuser     = "root";
        $dbpassword = "";
        $dbname     = "blog_project";
        // $bdhost     = "sql300.epizy.com";
        // $dbuser     = "epiz_31115438";
        // $dbpassword = "BS0fHlNHWL";
        // $dbname     = "epiz_31115438_blog_projects";
        $this->conn = mysqli_connect( $bdhost, $dbuser, $dbpassword, $dbname );
        if ( !( $this->conn ) ) {
            die( "Database connection Error!!" );
        }
    }

    public function getAdminData( $data ) {
        $get_value      = 1;
        $status         = "login";
        $admin_check    = "find";
        $email          = $data['email'];
        $password       = md5( $data['password'] );
        $get_query      = "SELECT * FROM admin_info";
        $all_admin_info = mysqli_query( $this->conn, $get_query );
        // checking query admin table
        while ( $match_data = mysqli_fetch_assoc( $all_admin_info ) ) {
            if ( $email == $match_data['Email'] && $password == $match_data['Password'] ) {
                $admin_check = "finded";
                session_start();
                $_SESSION['ID']   = $match_data['ID'];
                $_SESSION['Name'] = $match_data['Name'];

                // Update login status
                $select_query = "SELECT * FROM logininfo";
                if ( mysqli_query( $this->conn, $select_query ) ) {
                    $info = mysqli_query( $this->conn, $select_query );
                    // checking duplicate login info
                    while ( $check_data = mysqli_fetch_assoc( $info ) ) {
                        if ( $check_data['Email'] == "$email" && $check_data['Password'] == "$password" ) {
                            $id                  = $check_data['ID'];
                            $update_login_status = "UPDATE logininfo SET Status='login' WHERE $id=ID";
                            mysqli_query( $this->conn, $update_login_status );
                            $get_value = 2;
                        }
                    }
                    // Insert new login info
                    if ( $get_value == 1 ) {
                        $query1 = "INSERT INTO logininfo (Email, Password, Status) VALUES('$email','$password','$status')";
                        mysqli_query( $this->conn, $query1 );
                    }
                }
                header( "location:template.php" );
                break;
            }
        }
        if ( $admin_check == "find" ) {
            echo "<script>alert('Email or Password is incorrect!!')</script>";
        }
    }

    public function logout_info() {
        $query1 = "SELECT * FROM logininfo";
        if ( mysqli_query( $this->conn, $query1 ) ) {
            $dblogin_info = mysqli_query( $this->conn, $query1 );
            if ( isset( $dblogin_info ) ) {
                while ( $login_info = mysqli_fetch_assoc( $dblogin_info ) ) {
                    $id    = $login_info['ID'];
                    $query = "UPDATE logininfo SET Status='logout' WHERE $id=ID";
                    if ( mysqli_query( $this->conn, $query ) ) {
                        mysqli_query( $this->conn, $query );
                    }
                }
            }
        }
        unset( $_SESSION['ID'] );
        unset( $_SESSION['Name'] );
        header( "location: index.php" );
    }

    public function check_load_page_display() {
        $query = "SELECT * FROM logininfo";
        if ( mysqli_query( $this->conn, $query ) ) {
            $data = mysqli_query( $this->conn, $query );
            if ( isset( $data ) ) {
                while ( $info = mysqli_fetch_assoc( $data ) ) {
                    if ( $info['Status'] == "login" ) {
                        $query1 = "SELECT * FROM admin_info";
                        if ( mysqli_query( $this->conn, $query1 ) ) {
                            $dbadmin_info = mysqli_query( $this->conn, $query1 );
                            if ( $dbadmin_info ) {
                                $admin_info = mysqli_fetch_assoc( $dbadmin_info );
                                session_start();
                                $_SESSION['ID']   = $admin_info['ID'];
                                $_SESSION['Name'] = $admin_info['Name'];
                                header( "location:template.php" );
                            }
                        }
                        break;
                    }
                }
            }
        }
    }

    public function put_cat_datas( $data ) {
        $cat_title  = $data['cat_title'];
        $cat_des    = $data['cat_des'];
        $cat_query  = "INSERT INTO cat_table(Cat_Title, Cat_Des) VALUES('$cat_title','$cat_des')";
        $return_mgs = mysqli_query( $this->conn, $cat_query );
        return "Data stored successfully.";
    }

    public function display_cat_datas() {
        $display_cat_query = "SELECT * FROM cat_table ORDER BY ID DESC";
        $data              = mysqli_query( $this->conn, $display_cat_query );
        return $data;
    }

    public function edit_display_cat_datas( $id ) {
        $edit_display_cat_query = "SELECT * FROM cat_table WHERE ID=$id";
        $edit_data              = mysqli_query( $this->conn, $edit_display_cat_query );
        return mysqli_fetch_assoc( $edit_data );
    }

    public function update_cat_datas( $data ) {
        $cat_title                = $data['update_cat_title'];
        $cat_des                  = $data['update_cat_des'];
        $id                       = $data["update_cat_id"];
        $update_display_cat_query = "UPDATE cat_table SET Cat_Title='$cat_title', Cat_Des='$cat_des' WHERE ID=$id";
        $edit_data                = mysqli_query( $this->conn, $update_display_cat_query );
        return "Data is successfully Updated.";
    }

    public function delete_category( $id ) {
        $dlt_cat_query = "DELETE FROM cat_table WHERE ID=$id";
        mysqli_query( $this->conn, $dlt_cat_query );
        return "Data Deleted Successfully.";
    }

    public function add_post( $data ) {
        $post_title       = $data['post_title'];
        $post_content     = $data['post_content'];
        $post_img_name    = $_FILES['post_img']['name'];
        $post_img_temname = $_FILES['post_img']['tmp_name'];
        $post_cat         = $data['post_cat'];
        $post_summary     = $data['post_summary'];
        $post_tag         = $data['post_tag'];
        $post_status      = $data['post_status'];

        $add_post_cat   = "INSERT INTO add_post(post_title,post_content,post_img,post_cat,post_author,post_date,post_summary,post_tag,post_status) VALUES('$post_title','$post_content','$post_img_name',$post_cat,'Admin',now(),'$post_summary','$post_tag', '$post_status')";
        $return_cat_mgs = mysqli_query( $this->conn, $add_post_cat );
        if ( $return_cat_mgs ) {
            move_uploaded_file( $post_img_temname, '../uploads/' . $post_img_name );
            return "Data stored successfully.";
        }

    }

    public function update_post( $data ) {
        $u_post_id      = $data['u_post_id'];
        $u_post_title   = $data['u_post_title'];
        $u_post_summary = $data['u_post_summary'];
        $u_post_content = $data['u_post_content'];
        $u_post_status  = $data['u_post_status'];

        $u_post_query      = "UPDATE add_post SET post_title='$u_post_title',post_summary='$u_post_summary',post_content='$u_post_content',post_status='$u_post_status' WHERE post_id=$u_post_id";
        $return_update_mgs = mysqli_query( $this->conn, $u_post_query );
        if ( $return_update_mgs ) {
            return "Data Updated successfully.";
        }

    }

    public function display_post_datas() {
        $post_display_query = "SELECT * FROM post_with_cat ORDER BY post_id DESC";
        $data               = mysqli_query( $this->conn, $post_display_query );
        return $data;

    }

    public function display_post_datasby_id( $id ) {
        $post_display_by_id_query = "SELECT * FROM post_with_cat WHERE post_id=$id";
        $data                     = mysqli_query( $this->conn, $post_display_by_id_query );
        $post_data                = mysqli_fetch_assoc( $data );
        if ( isset( $post_data ) ) {
            return $post_data;
        }

    }

    public function post_img_change_by_id( $data ) {
        $id                    = $data['u_post_img_id'];
        $post_img_name         = $_FILES['u_post_img']['name'];
        $post_img_tmp_name     = $_FILES['u_post_img']['tmp_name'];
        $post_img_update_query = "UPDATE post_with_cat SET post_img='$post_img_name' WHERE post_id=$id";
        $result                = mysqli_query( $this->conn, $post_img_update_query );
        if ( $result ) {
            move_uploaded_file( $post_img_tmp_name, "../uploads/" . $post_img_name );
            return "Image Changed Successfully.";
        }
    }

    public function post_dlt( $id ) {
        $post_display_query = "SELECT * FROM add_post WHERE post_id=$id";
        $datas              = mysqli_query( $this->conn, $post_display_query );

        $post_comment_query       = "DELETE FROM comment_info WHERE post_id=$id";
        $post_display_query_datas = mysqli_query( $this->conn, $post_comment_query );

        $post_comment_reply_query       = "DELETE FROM reply_comment WHERE post_reply_id=$id";
        $post_comment_reply_query_datas = mysqli_query( $this->conn, $post_comment_reply_query );

        $data = mysqli_fetch_assoc( $datas );
        if ( isset( $data ) ) {
            $dlt_img_name = $data['post_img'];
        }
        $post_dlt_query = "DELETE FROM add_post WHERE post_id=$id";
        $result         = mysqli_query( $this->conn, $post_dlt_query );
        if ( $result ) {
            if ( isset( $dlt_img_name ) ) {
                unlink( "../uploads/$dlt_img_name" );
            }

            return "Data deleted Successfully.";
        } else {
            return "Data is not deleted.";
        }
    }

    public function put_menu_item( $data ) {
        $menu_title             = $data['menu_title'];
        $menu_link              = $data['menu_link'];
        $add_menu_item_query    = "INSERT INTO header_menu(menu_title,menu_link) VALUES('$menu_title','$menu_link')";
        $return_header_menu_mgs = mysqli_query( $this->conn, $add_menu_item_query );
        if ( $return_header_menu_mgs ) {
            return "Menu Item stored successfully.";
        }

    }

    public function display_menu_item() {       
        $display_menu_item_query3="SELECT * FROM header_menu ORDER BY menu_id DESC";
        $return_header_menu_mgs3 = mysqli_query( $this->conn, $display_menu_item_query3 );      
       return $return_header_menu_mgs3;       

    }

    public function display_menu_item_by_id( $id ) {
        $display_menu_item_by_id_query = "SELECT * FROM header_menu WHERE menu_id=$id";
        $return_header_menu_mgs_by_id  = mysqli_query( $this->conn, $display_menu_item_by_id_query );
        $result                        = mysqli_fetch_assoc( $return_header_menu_mgs_by_id );

        if ( isset( $result ) ) {
            return $result;
        }

    }

    public function delete_menu_item( $id ) {
        $dlt_menu_item_query        = "DELETE FROM header_menu WHERE menu_id=$id";
        $return_header_menu_dlt_mgs = mysqli_query( $this->conn, $dlt_menu_item_query );
        if ( isset( $return_header_menu_dlt_mgs ) ) {
            return "Menu Item Deleted successfully.";
        }

    }

    public function update_menu_item( $data ) {
        $u_menu_id              = $data['u_menu_id'];
        $u_menu_title           = $data['u_menu_title'];
        $u_menu_link            = $data['u_menu_link'];
        $update_menu_item_query = "UPDATE header_menu SET menu_title='$u_menu_title',menu_link='$u_menu_link'  WHERE menu_id=$u_menu_id";
        $result                 = mysqli_query( $this->conn, $update_menu_item_query );
        if ( $result ) {
            return "Item Updated Successfully.";
        }
    }

    public function display_comment() {
        $display_comment            = "SELECT * FROM comment_info ORDER BY comment_id DESC";
        $return_display_comment_mgs = mysqli_query( $this->conn, $display_comment );
        if ( isset( $return_display_comment_mgs ) ) {
            return $return_display_comment_mgs;
        }

    }

    public function display_message() {
        $display_message_query      = "SELECT * FROM message_info ORDER BY message_id DESC";
        $return_display_content_mgs = mysqli_query( $this->conn, $display_message_query );
        if ( isset( $return_display_content_mgs ) ) {
            return $return_display_content_mgs;
        } else {
            die( "Data is not found!!" );
        }

    }

    public function display_commentby_id( $id ) {
        $display_comment            = "SELECT * FROM comment_info WHERE comment_id=$id";
        $return_display_comment_mgs = mysqli_query( $this->conn, $display_comment );
        if ( isset( $return_display_comment_mgs ) ) {
            return $return_display_comment_mgs;
        }

    }

    public function delete_comment( $id ) {
        $dlt_comment            = "DELETE FROM comment_info WHERE comment_id=$id";
        $return_dlt_comment_mgs = mysqli_query( $this->conn, $dlt_comment );
        if ( isset( $return_dlt_comment_mgs ) ) {
            return "Comment Deleted Successfully.";
        }

    }

    public function edit_comment( $data ) {
        $u_comment_id         = $data['u_comment_id'];
        $u_comment_status     = $data['u_comment_status'];
        $u_comment_query      = "UPDATE comment_info SET comment_status='$u_comment_status' WHERE comment_id=$u_comment_id";
        $return_u_comment_mgs = mysqli_query( $this->conn, $u_comment_query );
        if ( isset( $return_u_comment_mgs ) ) {
            return "Comment Updated Successfully.";
        }

    }

    public function add_comment_reply( $data ) {
        $post_reply_id           = $data['post_reply_id'];
        $post_reply_title        = $data['post_reply_title'];
        $comment_reply_id        = $data['comment_reply_id'];
        $comment_reply_mgs       = $data['comment_reply_mgs'];
        $add_comment_reply_query = "INSERT INTO reply_comment(comment_reply_id,post_reply_id,post_reply_title,comment_reply_date,comment_reply_mgs) VALUES($comment_reply_id,$post_reply_id,'$post_reply_title',now(),'$comment_reply_mgs')";
        $add_comment_reply_mgs   = mysqli_query( $this->conn, $add_comment_reply_query );
        if ( $add_comment_reply_mgs ) {
            return "Comment's reply successfully.";
        }

    }

}