#!/usr/bin/python
# -*- coding: utf-8 -*-

# ドライバをインポート
import mysql.connector
def popularhorce(race_id):
# データベース情報を設定
  User = 'root'
  Password = 'xxx'
  Host = 'xxx'
  DataBase = 'mysql'

# データベースに接続
  conn = mysql.connector.connect(user=User, password=Password, host=Host, database=DataBase,charset='utf8')

  cur = conn.cursor()

#keibaデータベースにアクセス
  cur.execute('USE keiba')
  #人気ナンバーワンの馬の馬番号を取得
  cur.execute('SELECT umaban FROM result WHERE race_id='+str(race_id)+' and popular=1')
  no1horce=cur.fetchall()
  #人気ナンバーワンの馬以外の馬番号と予想順位を、予想順位順に取得
  cur.execute('SELECT umaban,ranking_pre FROM result  WHERE race_id='+str(race_id)+' and popular!=1 ORDER BY ranking_pre')
  predict=cur.fetchall()
  #return predict[:][0]で人気no1以外の全馬の馬番号だけを予想順位順に取得できると思ったが、[:]を認識されなかったのでfor文
  forecast=[]
  for umaban in predict:
    forecast.append(umaban[0])


# データベースから切断
  cur.close()
  conn.close()

#no1horceを返す
  return no1horce[0][0],forecast
