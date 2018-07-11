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
.classbox {
  width: 260px;
  padding: 15px;
  padding-bottom: 0px;
  box-sizing: border-box;
  background-color: white;
  border-radius: 5px;
  box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.2);
  position: relative;
  cursor: pointer;
  display: inline-block;
  margin: 25px 45px;
  text-align: left;
  text-decoration: none;
}
.classbox:hover .classpicture {
  transform: scale(1.15);
}
.classbox:hover .bookbtn {
  bottom: 10px;
}
.classbox .top {
  height: 220px;
  border-radius: 5px 5px 0px 0px;
  margin: -15px;
  margin-bottom: 0px;
  overflow: hidden;
  position: relative;
}
.classbox .top .classpicture {
  width: 100%;
  height: 100%;
  position: absolute;
  background-image: url(https://res.cloudinary.com/sabina123/image/upload/v1530271405/samples/animals/kitten-playing.gif);
  background-size: cover;
  transition-duration: 0.3s;
}

.teacherpic {
  position: absolute;
  width: 60px;
  height: 60px;
  background-size: cover;
  border: solid 2px white;
  border-radius: 100%;
  box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.12);
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
  background-color: #398DD5;
  border-radius: 15px;
  box-shadow: 0px 0px 5px rgba(255, 255, 255, 0.5);
}

.teacher_name, .student_number {
  font-size: 15px;
  display: inline-block;
  color: #C3C3C3;
}

.student_number {
  font-weight: 300;
  position: absolute;
  right: 20px;
}

.progressbar {
  height: 10px;
  border-radius: 5px;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.12);
}
.progressbar .valuebar {
  background-color: #398DD5;
  width: 80px;
  height: 100%;
  transition-duration: 1s;
}

.view_number, .price {
  display: inline-block;
}

.view_number {
  font-weight: 300;
  font-size: 15px;
  margin: 10px 0px;
  color: #C3C3C3;
}

.classtitle, .price {
  color: #434343;
}

.price {
  font-size: 15px;
  posiiton: relative;
  margin-left: 10px;
}
 
</style>
