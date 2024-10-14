#! /bin/ba
xinput set-prop "pointer:ELAN050A:01 04F3:3158 Touchpad" 338 1
if xinput list | grep "Mouse"; then
  xinput set-prop  "mouse" 338 0
fi
