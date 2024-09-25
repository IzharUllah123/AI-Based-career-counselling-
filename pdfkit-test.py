import pdfkit

config = pdfkit.configuration(
    wkhtmltopdf="C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe")

pdfkit.from_file("res\\pdf-report-template.html",
                 "./res/output.pdf", configuration=config)
