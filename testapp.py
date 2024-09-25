from datetime import datetime
from flask import Flask, render_template, request
import pickle
import numpy as np
# import pdfkit

app = Flask(__name__)


@app.route('/')
def career():
    name = request.args.get("name")
    return render_template("hometest.php", name=name)


@app.route('/predict', methods=['POST', 'GET'])
def result():
    name = request.args.get("name")
    if request.method == 'POST':
        result = request.form
        i = 0
        print(result)
        res = result.to_dict(flat=True)
        print("res:", res)
        arr1 = res.values()
        arr = ([value for value in arr1])

        data = np.array(arr)

        data = data.reshape(1, -1)
        print(data)
        loaded_model = pickle.load(open("careerlast.pkl", 'rb'))
        predictions = loaded_model.predict(data)
       # return render_template('testafter.html',a=predictions)

        print(predictions)
        pred = loaded_model.predict_proba(data)
        print(pred)
        # acc=accuracy_score(pred,)
        pred = pred > 0.05
        # print(predictions)
        i = 0
        j = 0
        index = 0
        res = {}
        final_res = {}
        while j < 17:
            if pred[i, j]:
                res[index] = j
                index += 1
            j += 1
        # print(j)
        # print(res)
        index = 0
        for key, values in res.items():
            if values != predictions[0]:
                final_res[index] = values
                print('final_res[index]:', final_res[index])
                index += 1
        # print(final_res)
        jobs_dict = {0: 'AI ML Specialist',
                     1: 'API Integration Specialist',
                     2: 'Application Support Engineer',
                     3: 'Business Analyst',
                     4: 'Customer Service Executive',
                     5: 'Cyber Security Specialist',
                     6: 'Data Scientist',
                     7: 'Database Administrator',
                     8: 'Graphics Designer',
                     9: 'Hardware Engineer',
                     10: 'Helpdesk Engineer',
                     11: 'Information Security Specialist',
                     12: 'Networking Engineer',
                     13: 'Project Manager',
                     14: 'Software Developer',
                     15: 'Software Tester',
                     16: 'Technical Writer'}

        job_descriptions = {0: 'AI/ML specialist is a software specialist with a strong mathematics background and a knowledge of coding, who’s core responsibilities are Designing and developing machine learning and deep learning systems, Running machine learning tests and experiments, Implementing appropriate ML algorithms.',
                            1: 'An Application Support Engineer is an IT professional who provides technical support regarding a spectrum of software used within a specific business sector. Due to this broad definition, the core responsibilities of an Application Support Engineer vary depending on the industry. Some Application Support Engineers are responsible for database management, while others put more emphasis on the programming end of an application. The specific focus is dependent on the needs of the business.',
                            2: 'Application Support Engineer Description ...',
                            3: 'Business analyst help guide businesses in improving processes, products, services and software through data analysis. These agile workers straddle the line between IT and the business to help bridge the gap and improve efficiency.',
                            4: 'Customer Service Executive manages a team of representatives who will offer excellent customer service and after-sales support. Customer Service Execute creates policies and procedures and oversee the customer service provided by the team. The Customer Service Executive will be responsible for the selection of staff in the hiring process and ensure that a standardized level of service is maintained for all customers.',
                            5: 'Cyber Security Specialist is responsible for providing security during the development stages of software systems, networks and data centers. The professionals have to search for vulnerabilities and risks in hardware and software. They manage and monitor any attacks and intrusions. The Security Specialist has to recognize the potential threat or attempted breach by closing off the security vulnerability. They build firewalls into network infrastructures',
                            6: 'A data scientist is someone who makes value out of data. Such a person proactively fetches information from various sources and analyzes it for better understanding about how the business performs, and to build AI tools that automate certain processes within the company.',
                            7: 'Database administrators or managers create and maintain databases compatible with their companies’ needs. These information technology (IT) professionals oversee database updates, storage, security, and troubleshooting.',
                            8: 'The Graphic Designer job includes the entire process of defining requirements, visualizing and creating graphics including illustrations, logos, layouts and photos. Graphic Designer will be the one to shape the visual aspects of websites, books, magazines, product packaging, exhibitions and more.',
                            9: 'Hardware engineers design the technology of the future. Using their solid knowledge of computer components and how they function, these skilled professionals play an important role in the development of a variety of useful products.',
                            10: 'Helpdesk Engineer are the go-to people for providing technical assistance and support related to computer systems, hardware, and software. They are responsible for answering queries and addressing system and user issues in a timely and professional manner. Helpdesk Engineer works with the IT team, and will often interact with system and computer users across the company. The helpdesk team will train users on basic system and computer functions.',
                            11: 'Information Security role involves in understanding and taking steps to mitigate the risks associated with collecting, storing and transmitting data in a business setting. Information Security Specialist will be expected to set up security measures that help prevent security breaches, as well as analyzing any breeches that do occur.',
                            12: 'Networking Engineer will be responsible for maintaining and administering our company\'s computer networks. Primary duties will include maintenance of computer networks, hardware, software, and other related systems, performing disaster recovery operations, protecting data, software, and hardware from attacks, and replacing faulty network hardware components when necessary.',
                            13: 'A Project Manager is responsible for planning, overseeing and leading projects from ideation through to completion. This is a senior role at an organisation and requires interaction with a range of internal and external stakeholders, most often managing several moving project parts simultaneously.',
                            14: 'Software Developer design, develop, and test software and applications for computers. The main duties and responsibilities of software developer include directing and participating in programming activities, monitoring, and evaluating system performance, and designing and implementing new programs and features.',
                            15: 'Software Testers are responsible for the quality of software development and deployment. They are involved in performing automated and manual tests to ensure the software created by developers is fit for purpose. Some of the duties include analysis of software, and systems, mitigate risk and prevent software issues.',
                            16: 'Technical writers, also called technical communicators, prepare instruction manuals, how-to guides, journal articles, and other supporting documents to communicate complex and technical information more easily. They also develop, gather, and disseminate technical information through an organization’s communications channels.'}
        # print(jobs_dict[predictions[0]])
        job = {}
        #job[0] = jobs_dict[predictions[0]]
        index = 1

        data1 = predictions[0]

        timestamp = int(datetime.timestamp(datetime.now()))

        config = pdfkit.configuration(
            wkhtmltopdf="C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe")

        file_name = f"{timestamp}.pdf"
        file_path = f".\\static\\output\\"+file_name

        template_content = render_template(
            "report.html", final_res=final_res, job_dict=jobs_dict, job_descriptions=job_descriptions, name=name)

        print(predictions)
        pdfkit.from_string(template_content,
                           file_path, configuration=config)

        return render_template("testafter.php", final_res=final_res, job_dict=jobs_dict, job0=data1, report_url=file_name, name=name)


if __name__ == '__main__':
    app.run(debug=True)
