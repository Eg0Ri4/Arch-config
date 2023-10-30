#! /bin/bash
case $1 in
0)
	rofi -show p -modi p:rofi-power-menu
	;;
1)
	rofi -show wifi -modi "wifi:iwdrofimenu"
;;
2)
	rofi -show drun
;;
esac
