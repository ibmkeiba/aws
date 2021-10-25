#!/usr/bin/python
# -*- coding: utf-8 -*-
import csv
import math
import sys
import popularhorce
import horce

race_id=sys.argv[1]
budget=sys.argv[2]
risk=sys.argv[3]
horces=horce.horce(race_id)#予想順位順の馬番号のリスト

def analism(number,risk):
  number=int(number)
  number=math.floor(number/100)
  risk=int(risk)
  output=""
  if risk==1:
    no1horce=str(popularhorce.popularhorce(race_id)[0])
    horceswithoutno1=popularhorce.popularhorce(race_id)[1]
    if number <=5:
      output="あなたは"+str(horces[0:number])+"番の複勝を1枚ずつ購入するとよいでしょう"
    elif number>=6 and number<=11:
      output="あなたは"+str(horces[0:6])+"番の複勝を"+math.floor(number/6)+"枚ずつ購入するとよいでしょう" #horces[0]はラベルなの>で、1~6に
    elif number>=12 and number<=20:
      output="あなたは"+no1horce+"番を軸馬に"+str(horceswithoutno1[0:12])+"番を相手のワイドを流しで"+str(math.floor(number/12))+"枚ずつ購入するとよいでしょう"
    elif number>=21:
      output="あなたは"+no1horce+"番を軸馬に"+str(horceswithoutno1[0:7])+"番を相手の3連複を流しで"+str(math.floor(number/21))+"枚
ずつ購入するとよいでしょう"


  elif risk==2:
    if number <=3:
      output="あなたは"+str(horces[0:number])+"番の単勝を1枚ずつ購入するとよいでしょう"
    elif number>=4 and number<=19:
      output="あなたは"+str(horces[0:4])+"番の単勝を"+str(math.floor(number/4))+"枚ずつ購入するとよいでしょう"
    elif number>=20 and number<=119:
      output="あなたは"+str(horces[0:5])+"番の馬単をボックスで"+str(math.floor(number/20))+"枚ずつ購入するとよいでしょう"
    elif number>=120:
      output="あなたは"+str(horces[0:6])+"番の3連単をボックスで"+str(math.floor(number/120))+"枚ずつ購入するとよいでしょう"
  return output

print(analism(budget,risk))
