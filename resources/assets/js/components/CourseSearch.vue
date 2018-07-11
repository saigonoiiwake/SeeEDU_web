<template>
    <div class="course-search">
        <div class="classbox" v-for="cls in classdatas">
            <div class="teacher">
                <img :src="cls.teacher.avatar" alt="" width="200px" class="teacherpic"> 
            </div>

            <div class="top">
                <img :src="cls.featured" class="classpicture"> 
            </div>

            <div class="bottom">
                <div class="hot">
                    <p>{{ cls.tag }} </p>
                </div>
                <div class="text">
                    <h1 class="classtitle"> {{ cls.title }} </h1>

                    <div class="teacher_name">
                        {{ cls.teacher.name }}
                    </div>

                    <div class="student_number">
                        修課人數
                      <span> {{ cls.num_enroll }} </span>
                    </div>  
                </div>
                <div class="progressbar">
                    <div class="valuebar" :style="{width: cls.num_enroll}">
                    </div>
                </div>
                <div class="view_number">
                    瀏覽量
                    <span> {{ cls.num_browse }} </span>
                </div>
                <div class="price">
                    課程價格
                    <span> {{ cls.price }} </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
        },
        data() {
            return {
                classdatas: JSON.parse('[{ "title": "JAPAN", "tag": "hot", "num_enroll": 20, "max_num": 50, "num_browse": 100, "price": "NT2000", "featured": "https://res.cloudinary.com/sabina123/image/upload/v1530271405/samples/animals/kitten-playing.gif", "teacher" : {"name": "YUKO", "avatar": "https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg"}},' +
                                       '{"title" : "ENGLISH", "tag": "hot", "num_enroll": 10, "max_num": 15, "num_browse": 200, "price": "NT50000", "featured": "https://res.cloudinary.com/sabina123/image/upload/v1530271405/samples/animals/kitten-playing.gif", "teacher" : {"name": "HIROSHI", "avatar": "https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg"}},' +
                                       '{"title" : "TAIWANES", "tag": "hot", "num_enroll": 10, "max_num": 15, "num_browse": 200, "price": "NT50000", "featured": "https://res.cloudinary.com/sabina123/image/upload/v1530271405/samples/animals/kitten-playing.gif", "teacher" : {"name": "HIROSHI", "avatar": "https://res.cloudinary.com/sabina123/image/upload/v1530271388/samples/animals/cat.jpg"}}' +
                                       ']')
            }
        },
        methods: {
        }
    }
</script>

<style lang="scss" scoped>
//顏色
$color_blue: #398DD5;
$color_grey: #C3C3C3;
$color_darkgrey: #434343;
$color_orange: #EF8F34;
$color_red: #E24831;
$color_background: #FCFCFC;
$color_yellow: #FBF04F;

//尺寸定義區 (標題/內文/書籤按鈕/書籤icon/老師icon)
$size_title: 25px;
$size_para: 15px;
$size_bookbtn: 42px;
$size_icon: 22px;
$size_teacher: 55px;

//尺寸(課程/上下半部/進度條/預購價/底部橘條)
$width_class: 260px;
$height_toppart: 220px;
$height_bottompart: 184px;
$height_progressbar: 10px;
$height_pricerow: 22px;
$height_bottomorange: 5px;

//尺寸(課程框框的padding)
$padding_class: 15px;

//預設照片
$url_teacher: "https://hahow.in/images/57ab3d5585b097070042067a";
$url_class: "https://hahow.in/images/574fab4f206cd60900c52a67?width=300";


.classbox {
    width: $width_class;
    padding: $padding_class;
    padding-bottom: 0px;
    box-sizing: border-box;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0px 0px 12px rgba(#000,0.2);
    position: relative;
    cursor: pointer;
    display: inline-block;
    margin: 25px 45px;
    text-align: left; 
    text-decoration: none;

    &.classpicture {
        transform: scale(1.15);
        background-size: cover;
        transition-duration: 0.3s;
        position: absolute;
    }

    &.bookbtn {
        bottom: 10px;
    }

    .top {
        height: $height_toppart;
        border-radius: 5px 5px 0px 0px;
        margin: -15px;
        margin-bottom: 0px;
        overflow: hidden;
        position: relative;
    }

    .teacherpic {
        position: absolute;
        width: 60px;
        height: 60px;
        background-size: cover;
        border: solid 2px white;
        border-radius: 100%;
        box-shadow: 0px 0px 12px rgba(0,0,0,0.12);
        z-index: 10;
        right: 5px;
        bottom: 115px;
    }

    .tag {
        width: 80px;
        height: 25px;
        position: absolute;
        color: white;
        top: 20px;
        left: -40px;
        padding-top: 5px;
        text-align: center;
        background-color: $color_blue;
        border-radius: 15px;
        box-shadow: 0px 0px 5px rgba(#fff,0.5);
    }

    .teacher_name,.student_number {
        font-size: 15px;
        display: inline-block;
        color: $color_grey;
    }

    .student_number {
        font-weight: 300;
        position: absolute;
        right: 20px;
    } 

    .progressbar {
        height: $height_progressbar;
        border-radius: 5px;
        overflow: hidden; 
        background-color: rgba(0,0,0,0.12);
    
        .valuebar {
            background-color: $color_blue;
            height: 100%;
            transition-duration: 1s;
        }
    }
    .view_number,.price{
        display: inline-block;
    } 
    .view_number {
        font-weight: 300;
        font-size: 15px;
        margin: 10px 0px;
        color: $color_grey;
    }

    .classtitle,.price {
        color: $color_darkgrey;
    }

    .price {
        font-size: 15px;
        posiiton: relative;
        margin-left: 10px ;
    }   
}  
</style>
