<?php
class Project {
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

    public function display_cat_datas() {
        $display_cat_query = "SELECT * FROM cat_table";
        $data              = mysqli_query( $this->conn, $display_cat_query );
        return $data;
    }

    public function display_post_data() {
        $post_display_query = "SELECT * FROM post_with_cat WHERE post_status=1";
        // $post_display_query = "SELECT * FROM add_post WHERE post_status=1";
        $data = mysqli_query( $this->conn, $post_display_query );
        return $data;
    }

    public function display_post_data_by_search( $search_bar_data ) {
        $info1 = $search_bar_data['search_bar'];
        $info  = trim( $info1 );
        if ( $info ) {
            $post_display_query = "SELECT * FROM post_with_cat WHERE post_status=1&&(post_title LIKE '%$info%'||post_content LIKE '%$info%'||Cat_Title LIKE '%$info%'||post_date LIKE '%$info%'||post_summary LIKE '%$info%'||post_tag LIKE '%$info%'||post_author LIKE '%$info%') ORDER BY post_id DESC";
            $data               = mysqli_query( $this->conn, $post_display_query );
        } else {
            $data = $info;
        }
        return $data;
    }

    public function display_post_data_by_search_by_get( $search_bar_data ) {
        $info1 = $search_bar_data;
        $info  = trim( $info1 );
        if ( $info ) {
            $post_display_query = "SELECT * FROM post_with_cat WHERE post_status=1&&(post_title LIKE '%$info%'||post_content LIKE '%$info%'||Cat_Title LIKE '%$info%'||post_date LIKE '%$info%'||post_summary LIKE '%$info%'||post_tag LIKE '%$info%'||post_author LIKE '%$info%') ORDER BY post_id DESC";
            $data               = mysqli_query( $this->conn, $post_display_query );
        } else {
            $data = $info;
        }
        return $data;
    }

    public function blog_display_post_data( $pegi_start, $pegi_end ) {
        $post_display_query = "SELECT * FROM post_with_cat WHERE post_status=1 ORDER BY post_id DESC LIMIT $pegi_start,$pegi_end";
        $data               = mysqli_query( $this->conn, $post_display_query );
        return $data;
    }

    public function display_recent_post_data() {
        $recent_post_display_query = "SELECT * FROM post_with_cat WHERE post_status=1";
        $recent_data               = mysqli_query( $this->conn, $recent_post_display_query );
        return $recent_data;
    }

    public function display_single_post_by_id( $id ) {
        $single_post_display_query = "SELECT * FROM post_with_cat WHERE post_id=$id";
        $single_data               = mysqli_query( $this->conn, $single_post_display_query );
        if ( isset( $single_data ) ) {
            return mysqli_fetch_assoc( $single_data );

        }

    }

    public function display_menu_item() {
        $display_menu_item_query = "SELECT * FROM header_menu";
        $return_header_menu_mgs  = mysqli_query( $this->conn, $display_menu_item_query );
        if ( isset( $return_header_menu_mgs ) ) {
            return $return_header_menu_mgs;
        }

    }

    public function store_comment( $data ) {
        $post_id            = $data['post_id'];
        $comment_name       = $data['comment_name'];
        $comment_email      = $data['comment_email'];
        $comment_subject    = $data['comment_subject'];
        $comment_message    = $data['comment_message'];
        $add_comment_query  = "INSERT INTO comment_info(post_id,comment_name,comment_email,comment_subject,comment_message,comment_date,comment_status) VALUES($post_id,'$comment_name','$comment_email','$comment_subject','$comment_message',now(),'2')";
        $return_comment_mgs = mysqli_query( $this->conn, $add_comment_query );
        if ( $return_comment_mgs ) {
            return "Commented successfully.";
        }

    }

    public function display_comment( $id ) {
        $display_comment            = "SELECT * FROM comment_info WHERE post_id=$id&&comment_status='1'";
        $return_display_comment_mgs = mysqli_query( $this->conn, $display_comment );
        if ( isset( $return_display_comment_mgs ) ) {
            return $return_display_comment_mgs;
        }

    }

    public function disply_comment_reply( $id ) {
        $add_comment_reply_query = "SELECT * FROM reply_comment WHERE comment_reply_id=$id";
        //(comment_reply_id,post_reply_id,post_reply_title,comment_reply_date,comment_reply_mgs) VALUES($comment_reply_id,$post_reply_id,'$post_reply_title',now(),'$comment_reply_mgs')";
        $add_comment_reply_mgs = mysqli_query( $this->conn, $add_comment_reply_query );
        if ( $add_comment_reply_mgs ) {
            return $add_comment_reply_mgs;
        }

    }

    public function disply_comment_reply_count( $id ) {
        $add_comment_reply_query = "SELECT * FROM reply_comment WHERE post_reply_id=$id";
        //(comment_reply_id,post_reply_id,post_reply_title,comment_reply_date,comment_reply_mgs) VALUES($comment_reply_id,$post_reply_id,'$post_reply_title',now(),'$comment_reply_mgs')";
        $add_comment_reply_mgs = mysqli_query( $this->conn, $add_comment_reply_query );
        if ( $add_comment_reply_mgs ) {
            return $add_comment_reply_mgs;
        }

    }

    public function set_message( $data ) {
        $message_name       = $data['message_name'];
        $message_email      = $data['message_email'];
        $message_subject    = $data['message_subject'];
        $message_content    = $data['message_content'];
        $set_message_query  = "INSERT INTO message_info(message_name,message_email,message_subject,message_content,message_date) VALUES('$message_name','$message_email','$message_subject','$message_content',now())";
        $return_set_message = mysqli_query( $this->conn, $set_message_query );
        if ( isset( $return_set_message ) ) {
            return "Your Message is submitted.";
        } else {
            return "Your Message isn't submitted.";
        }

    }

}