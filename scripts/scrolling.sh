#! /bin/bash
xinput set-prop "pointer:ELAN050A:01 04F3:3158 Touchpad" 338 1
if xinput list | grep "Logitech G203 LIGHTSYNC Gaming Mouse"; then
  xinput set-prop "pointer:Logitech G203 LIGHTSYNC Gaming Mouse" 338 0
fi
