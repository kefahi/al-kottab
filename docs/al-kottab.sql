
PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;

-- مستخدمين : طلاب، مدرسين، أولياء أمور، مدراء.
-- متطلبات : اختبار، واجب منزلي، بحث، مفتوح، لا منهجي.
-- إشعارات : رسالة، تبليغ، تحذير.
-- مدارس، غرف، شعب، صفوف، مقررات، حصص، علامات.
-- رسائل.
-- قوالب للمناهج التعليمية على مستوى الدولة أو منهجية التدريس
CREATE TABLE users ( -- مستخدمين
  id               INTEGER PRIMARY KEY,
  user_name         TEXT    NOT NULL,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  first_name       TEXT    NOT NULL,
  second_name      TEXT    NOT NULL,
  third_name       TEXT        NULL,
  fourth_name      TEXT    NOT NULL,
  gender           INTEGER NOT NULL, -- 1:male, 2:female
  birth_date       INTEGER NOT NULL,
  birth_location   TEXT    NOT NULL, -- City/Town/Village, State, Country
  address          TEXT    NOT NULL,
  mobiles          TEXT        NULL,
  land_line        TEXT        NULL,
  national_id      TEXT        NULL,
-- 1:هوية، 2:جواز سفر، 3:وثيقة، 4:أخرى-غيرموجودة
  national_id_type INTEGER NOT NULL, -- 1: ID , 2: passport, 3:document, 4:other/none 
  school_id        INTEGER     NULL, -- Current
  password         TEXT        NULL,
-- النوع: 1:مدرس، 2:ولي أمر، 3:طالب، 4:مدير
  type             INTEGER NOT NULL, -- 1:teacher, 2:guardian, 4: student, 8: admin
  guardian_id      INTEGER     NULL, -- student
  class_id         INTEGER     NULL, -- Current : student / guardian
  grade_id         INTEGER    NULL, -- Current : student / guardian
  student_data     TEXT        NULL,
  CONSTRAINT fk_user_guardian FOREIGN KEY (guardian_id) REFERENCES users (id),
  CONSTRAINT fk_user_school   FOREIGN KEY (school_id)   REFERENCES schools (id)
);

CREATE TABLE schools ( -- مدارس
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  name             TEXT    NOT NULL,
  description      TEXT    NOT NULL,
  address          TEXT    NOT NULL,
  phones           TEXT    NOT NULL,
  notes            TEXT        NULL,
  admin_id         INTEGER NOT NULL
);

CREATE TABLE marks ( -- علامات
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  school_id        INTEGER NOT NULL,
  grade_id         INTEGER NOT NULL,
  class_id         INTEGER NOT NULL,      
  teacher_id       INTEGER NOT NULL,
  student_id       INTEGER NOT NULL,
  school_year      INTEGER NOT NULL,
  CONSTRAINT fk_marks_school  FOREIGN KEY ( school_id )  REFERENCES schools(id),
  CONSTRAINT fk_marks_grade   FOREIGN KEY ( grade_id )   REFERENCES grades(id),
  CONSTRAINT fk_marks_class   FOREIGN KEY ( class_id )   REFERENCES classes(id),
  CONSTRAINT fk_marks_teacher FOREIGN KEY ( teacher_id ) REFERENCES users(id),
  CONSTRAINT fk_marks_student FOREIGN KEY ( student_id ) REFERENCES users(id)
);

CREATE TABLE classes ( -- شُعَب
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  room_id          INTEGER NOT NULL,
  grade_id         INTEGER NOT NULL,
  school_id        INTEGER NOT NULL,
  capacity         INTEGER NOT NULL,
  saturday, -- schedule
  sunday,
  monday,
  tuesday,
  wednesday,
  thrusday,
  friday,
  CONSTRAINT fk_classes_grade FOREIGN KEY ( grade_id ) REFERENCES grades(id),
  CONSTRAINT fk_classes_room  FOREIGN KEY ( room_id )  REFERENCES rooms(id),
  CONSTRAINT fk_classes_school  FOREIGN KEY ( school_id )  REFERENCES schools(id)
);

CREATE TABLE rooms ( -- غُرَف
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  school_id        INTEGER NOT NULL,
  capacity         INTEGER NOT NULL,
  details          TEXT        NULL -- building, floor, section, name, description, size
);

CREATE TABLE grades ( -- صفوف
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  school_id        INTEGER NOT NULL,
  name             TEXT    NOT NULL,
  ordinal          INTEGER NOT NULL, -- The progressive order of grades, 1st, 2nd, ...etc
  -- 1:حضانة، 2:روضة، 3: ابتدائي، 4:إعدادي، 5:ثانوي
  cgroup            INTEGER NOT NULL, -- 1:pre-school, 2:elementary, 4:prepatary, 8:secondary
  CONSTRAINT fk_grades_school  FOREIGN KEY ( school_id )  REFERENCES schools(id)
);

CREATE TABLE subjects ( -- مقررات
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  name             TEXT    NOT NULL,
  description      TEXT,
  class_id         INTEGER NOT NULL
  
);

CREATE TABLE student_classes ( -- شعب الطالب
  student_id       INTEGER NOT NULL,
  class_id         INTEGER NOT NULL,
  grade_id         INTEGER NOT NULL, -- Denormalized: student_grades.grade_id
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  school_year      INTEGER NOT NULL, -- Denormalized: student_grades.school_year
  notes            TEXT    NOT NULL,
  CONSTRAINT fk_student_classes_student FOREIGN KEY ( student_id ) REFERENCES users(id),
  CONSTRAINT fk_student_classes_class   FOREIGN KEY ( class_id )   REFERENCES classes(id)
);

CREATE TABLE school_days ( -- الأيام الدراسية
  school_id        INTEGER NOT NULL,
  type             INTEGER NOT NULL, -- 1: regular school day, 2:weekend, 4:public_holiday, 8:unplanned_off, 16:substitution_for_off, 32:winter_vacation, 64:summar_vacation
  starts_at        INTEGER NOT NULL,
  -- TBD: Add restrictions to certain grades or classes. say for example its a school day only for X but off for Y
  note             TEXT        NULL -- e.g. what holiday this is.
);

CREATE TABLE student_days ( -- أيام الطالب 
  school_id        INTEGER NOT NULL,
  student_id       INTEGER NOT NULL,
  type             INTEGER NOT NULL, -- 1:regular school day, 2:sick, 3:leave
  day              INTEGER NOT NULL
);

CREATE TABLE student_grades ( -- صفوف الطالب
  student_id       INTEGER NOT NULL,
  grade_id         INTEGER NOT NULL,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  school_year      INTEGER NOT NULL,
  notes            TEXT    NOT NULL,
  CONSTRAINT fk_student_grades_student FOREIGN KEY ( student_id ) REFERENCES users(id),
  CONSTRAINT fk_student_grades_grade   FOREIGN KEY ( grade_id )   REFERENCES grades(id)  
);

CREATE TABLE teacher_classes ( -- شعب المدرس
  teacher_id       INTEGER NOT NULL,
  class_id         INTEGER NOT NULL,
  grade_id         INTEGER NOT NULL,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  school_year      INTEGER NOT NULL,
  notes            TEXT    NOT NULL,
  CONSTRAINT fk_teacher_classes_teacher FOREIGN KEY ( teacher_id ) REFERENCES users(id),
  CONSTRAINT fk_teacher_classes_class   FOREIGN KEY ( class_id )   REFERENCES classes(id)
);

CREATE TABLE requisits ( -- متطلبات
  id               INTEGER PRIMARY KEY,
  teacher_id       INTEGER NOT NULL,
  grade_id         INTEGER NOT NULL,
  marks_credit     INTEGER     NULL,
  due_date         INTEGER NOT NULL, 
  title            TEXT        NULL, 
  description      TEXT        NULL,
  type             INTEGER NOT NULL, -- 1:exam, 2:homework, 4:research, 8:open, 16:extra-curriculam
  attachements     BLOB        NULL
);

CREATE TABLE student_requisits (
  student_id       INTEGER NOT NULL,
  requisit_id      INTEGER NOT NULL,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  earned_marks     INTEGER     NULL,
  attachements     BLOB        NULL  
);

CREATE TABLE notifications ( -- إشعارات
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  type             INTEGER NOT NULL, -- 1:message, 2:notice, 4:alert
  priority         INTEGER     NULL,
  severity         INTEGER     NULL,
  generated_by     INTEGER NOT NULL,
  user_id          INTEGER NOT NULL,
  text             TEXT    NOT NULL,
  delivery_status  BOOLEAN NOT NULL,
  delivery_method  INTEGER NOT NULL, -- 1:sms, 2:message, 4:email ...
  CONSTRAINT fk_notifications_user FOREIGN KEY ( user_id ) REFERENCES users(id)
);

CREATE TABLE messages ( -- رسائل
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  priority         INTEGER     NULL,
  severity         INTEGER     NULL,
  sender_id        INTEGER NOT NULL,
  recipient_id     INTEGER NOT NULL, -- TBD: add support for group messages.
  body             TEXT    NOT NULL,
  subject          TEXT    NOT NULL,
  delivery_status  INTEGER NOT NULL, -- 1:unread, 2:read, 4:replied
  delivery_method  INTEGER NOT NULL, -- 1:sms, 2:message, 4:email, 8:phone-call ...
  CONSTRAINT fk_messages_sender FOREIGN KEY ( sender_id )       REFERENCES users(id),
  CONSTRAINT fk_messages_recipient FOREIGN KEY ( recipient_id ) REFERENCES users(id)
);

CREATE TABLE channels ( -- قنوات
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  name             TEXT    NOT NULL,
  description      TEXT    NOT NULL,
  restrictions     TEXT    NOT NULL
);

CREATE TABLE clubs ( -- نوادي
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  name             TEXT    NOT NULL,
  description      TEXT    NOT NULL,
  restrictions     TEXT    NOT NULL
);

CREATE TABLE club_members ( --
  club_id          INTEGER NOT NULL,
  user_id          INTEGER NOT NULL,
  role             TEXT    NOT NULL
);

CREATE TABLE buses ( --
  id               INTEGER PRIMARY KEY,
  created_at       INTEGER NOT NULL,
  updated_at       INTEGER NOT NULL,
  route_go         BLOB    NOT NULL, -- الذهاب
  route_back       BLOB    NOT NULL, -- الإياب
  drivers          TEXT    NOT NULL -- drivers + contact info
);

CREATE TABLE areas (
  id               INTEGER PRIMARY KEY,
  city_id          INTEGER NOT NULL,
  CONSTRAINT fk_areas_city FOREIGN KEY (city_id) REFERENCES cities(id)
);

CREATE TABLE cities (
  id               INTEGER PRIMARY KEY,
  name             TEXT    NOT NULL,
  country_id       INTEGER NOT NULL,
  CONSTRAINT fk_cities_country FOREIGN KEY (country_id) REFERENCES countries(id)
);

CREATE TABLE countries (
  id               INTEGER PRIMARY KEY,
  code             TEXT    NOT NULL,
  name             TEXT    NOT NULL
);
COMMIT;
