window.onload = function() {
    loadData('btn1');
}

function loadData(name)
{
   
if(name=="btn1")
{
    document.getElementById("para").innerHTML = "Our recruitment service company's system terms of use outline the guidelines and regulations governing the use of our platform. By accessing or using our system, users agree to abide by these terms. They cover aspects such as user obligations, account registration, data privacy, intellectual property rights, and limitations of liability. Our terms ensure a fair and secure environment for both candidates and employers, fostering trust and professionalismin the recruitment process.";
}

else if(name=="btn2")
{
    document.getElementById("para").innerHTML = "Our recruitment service company's privacy policy governs the handling of user data within our system.We are committed to protecting the privacy and confidentiality of all personal information collected.  This policy outlines how we collect, use, and safeguard user data, ensuring compliance with relevant privacy laws and regulations.  We only use personal information for legitimate business purposes, such as facilitating job matches and improving our services. Our privacy policy also explains users' rights regarding their data and provides mechanisms for exercising those rights.Trust and transparency are core principles guiding our privacy practices.";
}

else if(name=="btn3")
{
    document.getElementById("para").innerHTML = "In our recruitment service company's system, we uphold the integrity of intellectual property rights.We assert ownership over all content, including but not limited to text, images, and software, developed or provided by us.Users are granted limited, non-exclusive rights to access and use the platform for its intended purpose.Any unauthorized use, reproduction, or distribution of our intellectual property is strictly prohibited. We respect the intellectual property rights of others and expect users to do the same.Our commitment to protecting intellectual property fosters an environment of innovation and creativity within our system.";
}

else if(name=="btn4")
{
    document.getElementById("para").innerHTML = "trust In our recruitment service company's system, we provide a disclaimer of warranties to users. While we strive for accuracy, reliability, and functionality, we cannot guarantee that our platform  will always meet individual expectations or be error-free.Users acknowledge that the use of our system is at their own risk.We expressly disclaim all warranties, whether express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.  This disclaimer ensures transparency and sets realistic expectations regarding the limitations of our platform, promoting and accountability in our services."  
}

else if(name=="btn5")
{
    document.getElementById("para").innerHTML = "In our recruitment service company's system, the governing law clause specifies the legal frameworkthat regulates the terms and conditions of platform usage.It establishes that any disputes arising from the interpretation or implementation of these terms will be governed by the laws of the jurisdiction where the company is registered or operates. This clause ensures clarity and consistencyin legal matters, providing users with a clear understanding of the applicable legal principles and procedures governing their interactions with our platform. It promotes transparency and confidence in our commitment to adhering to established legal standards."
}


}