SHELL := /bin/bash

datas:
	curl -L -o import/datas.csv https://mail.google.com/mail/u/0/#inbox/FMfcgzGtwWGdpcwSflPqSqlqllwQfZdD?projector=1&messagePartId=0.1
.PHONY : datas