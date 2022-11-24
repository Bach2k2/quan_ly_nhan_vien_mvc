<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://th.bing.com/th/id/OIP.YPmaQXLVdP3q9iTXANeyFgHaHa?w=189&h=189&c=7&r=0&o=5&dpr=2&pid=1.7">
    <title>Assignment: Staff Management</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            display: flex;
            /* Display theo chieu ngang*/
            min-height: 100vh;
            /* Chieu doc min 100 viewport-height */
            flex-direction: column;
        }

        #content {
            display: flex;
            flex: 1;
        }

        #content article {
            flex: 1;
        }

        #content>nav,
        #content>aside {
            /* flex: 0 0 20 vw;*/
            /* Viewport width */
            min-height: fit-content;
            background: beige;
        }

        #content>nav {
            order: -1;
        }


        header,
        footer {
            margin: 0px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 24px;
            text-align: center;
            background: #F0F8FF;
            height: 10vh;
        }

        /* header*/
        marquee {
            direction: right;
        }


        footer,
        article,
        nav,
        aside {
            padding: 1em;
        }

        #right {
            float: right;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;

            /* width:25%;  Loi font chu*/
            /* float:left; */
        }

        ul>li {
            margin: 0px 10px;
            padding: 10px 0px;
        }

        ul>li>a {
            display: block;
            padding: 8px 16px;
            text-decoration: none;
        }

        ul>li>a:hover {
            background-color: red;
            color: #F0F8FF;
        }

        @media screen and (max-width: 600px) {

            #content>nav,
            aside {
                margin: 0px;
                padding: 0;
                width: 15%;
                height: fit-content;

            }

            #content>article {
                margin: 0px;
                padding: 0;
                width: 70%;
            }

            img {
                width: 100%;
            }
        }

        @media screen and (min-width:600px) {

            #content>nav,
            aside {
                margin: 0px;
                padding: 0;
                width: 300px;
                /* height:fit-content; Ko anh huong*/

            }

            #content>article {
                margin: 0px;
                padding: 0;
                width: 70%;
            }

            img {
                height: fit-content;
                width: 100%;
                flex-direction: column;
            }

        }

        .center {
            text-align: center;
        }
    </style>
</head>
<?php
//require('./controller/NhanVienController.php');
// include_once('./controller/NhanVienController.php');
// $controller=new NhanVienController();
?>

<body>
    <header>
        <marquee>
            <h2>Quản lý nhân sự Trường đại học bách khoa</h2>
        </marquee>
        <h5 id=right><?php echo "Today is " . date('d-m-y'); ?></h5>
    </header>
    <div id="content">
        <article>
            <iframe width="100%" height="100% /*src=""*/ name="main_content"></iframe>
        </article>
        <nav>
            <!-- <form action="xulydangnhap.php" name="homeForm" method="get"> -->
            <h3 class="center">Lựa chọn</h3>
            <ul>
                <li><a href="../view/index.php">Trang chủ</a></li>
                <li><a class="center">Nhân viên</a>
                    <ul>
                        <li>
                            <form>
                                <input type="hidden" name="controller" value="listNV">
                                <button type="submit" formtarget="main_content" formaction="../controller/NhanVienController.php">Xem danh sách nhân viên</button>
                            </form>
                        </li>
                        <li>
                            <form>
                                <input type="hidden" name="controller" value="insertNV">
                                <button type="submit" formaction="../controller/NhanVienController.php" formtarget="main_content">Thêm mới nhân viên</button>
                            </form>
                        </li>
                        <li>
                            <form>
                                <input type="hidden" name="controller" value="updateNV">
                                <button type="submit" formaction="../controller/NhanVienController.php" formtarget="main_content">Cập nhật nhân viên</button>
                            </form>
                        </li>


                        <li>
                            <form>
                                <input type="hidden" name="controller" value="showDeleteNV">
                                <button type="submit" formaction="../controller/NhanVienController.php" formtarget="main_content">Xóa nhân viên</button>
                            </form>
                        </li>
                        <li>
                            <form>
                                <input type="hidden" name="controller" value="search">
                                <button type="submit" formaction="../controller/NhanVienController.php" formtarget="main_content">Tìm kiếm</button>
                            </form>
                        </li>

                    </ul>
                </li>

                <li><a class="center">Phòng ban</a>
                    <ul>
                        <li>
                            <form>
                                <input type="hidden" name="controller" value="listPB">
                                <button type="submit" formtarget="main_content" formaction="../controller/PhongBanController.php">Xem thông tin</button>
                            </form>
                        </li>

                        <li>
                            <form>
                                <input type="hidden" name="controller" value="updatePB">
                                <button type="submit" formaction="../controller/PhongBanController.php" formtarget="main_content">Cập nhật phòng ban</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- </form> -->
        </nav>
        <aside>
            <img src="https://2.bp.blogspot.com/-QlBtqh-niOo/W7R9AdW6S3I/AAAAAAAAB-c/jHX32ErT1G44ak1PibSCymWxrU-YN6SRgCLcBGAs/s1600/Manarola-Night-4K-Wallpaper-3840x2160.jpg">
            <img src="https://2.bp.blogspot.com/-QlBtqh-niOo/W7R9AdW6S3I/AAAAAAAAB-c/jHX32ErT1G44ak1PibSCymWxrU-YN6SRgCLcBGAs/s1600/Manarola-Night-4K-Wallpaper-3840x2160.jpg">
            <img src="https://2.bp.blogspot.com/-QlBtqh-niOo/W7R9AdW6S3I/AAAAAAAAB-c/jHX32ErT1G44ak1PibSCymWxrU-YN6SRgCLcBGAs/s1600/Manarola-Night-4K-Wallpaper-3840x2160.jpg">

        </aside>
    </div>
    <footer>
        @Copyright. Made by Le Trong Bach
        Assignment 3: Management Staff.
        <footer>
</body>

</html>