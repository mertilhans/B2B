#!/bin/bash
BANNER=$(cat <<'EOF'

  M   M  EEEEE  RRRRR  TTTTT  1  3333  3333   77777
  MM MM  E      R   R    T    1     3     3      7
  M M M  EEE    RRRRR    T    1  3333  3333     7
  M   M  E      R  R     T    1     3     3    7
  M   M  EEEEE  R   R    T    1  3333  3333   7
EOF
)

ARCHITECTURE=$(uname -a | sed 's/ PREEMPT_DYNAMIC//')

PHYSICAL_CPU_NB=$(lscpu | grep "CPU(s)" | awk '{print $2}' | head -n 1)

VIRTUAL_CPU_NB=$(nproc)

TOTAL_RAM=$(free -m | awk 'NR==2 {print $2}')
USED_RAM=$(free -m | awk 'NR==2 {print $3}')
RAM_USAGE=$(awk "BEGIN {print ($USED_RAM/$TOTAL_RAM)*100}")

DISK_INFO=$(df -h | grep '^/dev')
DISK_TOTAL=$(echo $DISK_INFO | awk '{print $2}')
DISK_USED=$(echo $DISK_INFO | awk '{print $3}')
DISK_USAGE=$(echo $DISK_INFO | awk '{print $5}')

CPU_LOAD=$(cat /proc/loadavg | awk '{print $1}')

LAST_BOOT=$(who -b | awk '{print $3, $4}')

LVM_STATUS=$(if [ $(lsblk | grep "lvm" | wc -l) -eq 0 ]; then echo no; else echo yes; fi)

TCP_CONNECTIONS=$(netstat -an | grep ESTABLISHED | wc -l)

CONNECTED_USERS=$(who | wc -l)

IP_ADDRESS=$(hostname -I | awk '{print $1}')
MAC_ADDRESS=$(ip link | grep "ether" | awk '{print $2}')

SUDO_COMMANDS_COUNT=$(cat /var/log/sudo/sudo.log | grep "COMMAND" | wc -l)


wall "
$BANNER
	#Architecture	:	$ARCHITECTURE
	#CPU physical	:	$PHYSICAL_CPU_NB
	#vCPU		:	$VIRTUAL_CPU_NB
	#Memory Usage	:	$USED_RAM/$TOTAL_RAM ($RAM_USAGE%)
	#Disk Usage	:	$DISK_USED/$DISK_TOTAL ($DISK_USAGE)
	#CPU load	:	$CPU_LOAD
	#Last boot	:	$LAST_BOOT
	#LVM use	:	$LVM_STATUS
	#Connections TCP:	$TCP_CONNECTIONS ESTABLISHED
	#User log	:	$CONNECTED_USERS
	#Network	:	$IP_ADDRESS ($MAC_ADDRESS)
	#Sudo		:	$SUDO_COMMANDS_COUNT cmd"



