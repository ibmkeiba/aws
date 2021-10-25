#!/usr/bin/python
# -*- coding: utf-8 -*-

# ドライバをインポート
import mysql.connector
def horce(race_id):
# データベース情報を設定
  User = 'root'
  Password = 'ibmer2021'
  Host = 'temaa-test-db.cyyyxfovd2dz.ap-northeast-1.rds.amazonaws.com'
  DataBase = 'mysql'

# データベースに接続
  conn = mysql.connector.connect(user=User, password=Password, host=Host, database=DataBase,charset='utf8')

  cur = conn.cursor()

#keibaデータベースにアクセス
  cur.execute('USE keiba')

  #指定レースに出場の馬番号と予想順位を、予想順位順に取得
  cur.execute('SELECT umaban,ranking_pre FROM result  WHERE race_id='+str(race_id)+' ORDER BY ranking_pre')
  predict=cur.fetchall()
  #return predict[:][0]で全馬の馬番号だけを予想順位順に取得できると思ったが、[:]を認識されなかったのでfor文
  forecast=[]
  for umaban in predict:
    forecast.append(umaban[0])


# データベースから切断
  cur.close()
  conn.close()

#no1horceを返す
  return forecast
