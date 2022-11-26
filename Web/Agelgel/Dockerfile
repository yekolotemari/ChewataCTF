FROM python:3.8

WORKDIR ./
COPY . .

RUN pip3 install -r requirements.txt

ENTRYPOINT ["python"]
CMD ["app.py"]
