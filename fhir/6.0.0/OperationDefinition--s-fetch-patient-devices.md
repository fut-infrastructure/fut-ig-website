# Fetch patient devices - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fetch patient devices**

## OperationDefinition: Fetch patient devices 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-patient-devices | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:fetch-patient-devices |

 

### Report Contents

 
This report contains Device information for each EpisodeOfCare: 
* Device
* DeviceUseStatement
* This report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.
* organization: Filter on EpisodeOfCare.managingOrganization match
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details


  { 'EHealthEpisodeOfCare': { 'resourceType': 'EpisodeOfCare', 'id': 'F417C17F9FDE24C9090BD629C8EE1697', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization', 'valueReference': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9' } } ], 'status': 'active', 'diagnosis': [{ 'condition': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034' }, 'rank': 1 } ], 'patient': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4' }, 'managingOrganization': { 'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451' }, 'period': { 'start': '1970-01-01T01:00:01+01:00', 'end': '1970-01-01T01:01:40+01:00' } }, 'EHealthDeviceUseStatement': [{ 'resourceType': 'DeviceUseStatement', 'id': '9541E8EAEAD24376F208D5CD8A4D25F5', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context', 'valueReference': { 'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5' } } ], 'status': 'active', 'subject': { 'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586' }, 'device': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' } } ], 'EHealthDevice': [{ 'resourceType': 'Device', 'id': '08D51B81A7FE5B480278150A94D4048A', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned', 'valueBoolean': true } ], 'status': 'active' } ], 'EHealthDeviceMetric': [{ 'resourceType': 'DeviceMetric', 'id': '7EA21ACD27EE012439F1440574A6BB21', 'meta': { 'versionId': '1', 'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric'] }, 'extension': [{ 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 5 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 10 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 12 } ] }, { 'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities', 'extension': [{ 'url': 'category', 'valueCodeableConcept': { 'coding': [{ 'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types', 'code': 'initial' } ] } }, { 'url': 'value', 'valueInteger': 14 } ] } ], 'identifier': { 'value': 'Foo' }, 'type': { 'text': 'code' }, 'source': { 'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A' }, 'category': 'calculation' } ] }
 

URL: [base]/$fetch-patient-devices

### Parameters

* **Use**: IN
  * **Name**: anonymization
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: organization
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: period
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Period](http://hl7.org/fhir/R4/datatypes.html#Period)
  * **Binding**: 
  * **Documentation**: 
* **Use**: IN
  * **Name**: devicetype
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Binary](http://hl7.org/fhir/R4/binary.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-fetch-patient-devices",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-fetch-patient-devices",
  "version" : "6.0.0",
  "name" : "fetch-patient-devices",
  "title" : "Fetch patient devices",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:25:37+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "### Report Contents\nThis report contains Device information for each EpisodeOfCare:\n- Device\n- DeviceUseStatement\n- DeviceMetrics\n### Grouping \nThis report is grouped by EpsiodeOfCare. Each group is returned in a separate JSon file.\n### Parameters\n- organization: Filter on EpisodeOfCare.managingOrganization match\n- period: Filter on DeviceUseStatement.whenUsed overlap\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing JSon files corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\n\n    {\n        'EHealthEpisodeOfCare': {\n            'resourceType': 'EpisodeOfCare',\n            'id': 'F417C17F9FDE24C9090BD629C8EE1697',\n            'meta': {\n                'versionId': '1',\n                'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare']\n            },\n            'extension': [{\n                    'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-episodeofcare-caremanagerOrganization',\n                    'valueReference': {\n                        'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/313D8B0E0AC8EA8169D1DA45ECEEACB9'\n                    }\n                }\n            ],\n            'status': 'active',\n            'diagnosis': [{\n                    'condition': {\n                        'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/Condition/9A7FCD55CA3031585A8F1690DB1D8034'\n                    },\n                    'rank': 1\n                }\n            ],\n            'patient': {\n                'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/A1D94F323D8EF09E5D913D9522FD83C4'\n            },\n            'managingOrganization': {\n                'reference': 'https://organization.local.ehealth.sundhed.dk/fhir/Organization/8DC75F2B12BCC832F92CC065C3D0B451'\n            },\n            'period': {\n                'start': '1970-01-01T01:00:01+01:00',\n                'end': '1970-01-01T01:01:40+01:00'\n            }\n        },\n        'EHealthDeviceUseStatement': [{\n                'resourceType': 'DeviceUseStatement',\n                'id': '9541E8EAEAD24376F208D5CD8A4D25F5',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-deviceusestatement-context',\n                        'valueReference': {\n                            'reference': 'https://careplan.local.ehealth.sundhed.dk/fhir/CarePlan/23D34B29DD02EB232B6575537FE8ADC5'\n                        }\n                    }\n                ],\n                'status': 'active',\n                'subject': {\n                    'reference': 'https://patient.local.ehealth.sundhed.dk/fhir/Patient/AC38B1F6391F256002E5A7BE69CB2586'\n                },\n                'device': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                }\n            }\n        ],\n        'EHealthDevice': [{\n                'resourceType': 'Device',\n                'id': '08D51B81A7FE5B480278150A94D4048A',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-privatelyOwned',\n                        'valueBoolean': true\n                    }\n                ],\n                'status': 'active'\n            }\n        ],\n        'EHealthDeviceMetric': [{\n                'resourceType': 'DeviceMetric',\n                'id': '7EA21ACD27EE012439F1440574A6BB21',\n                'meta': {\n                    'versionId': '1',\n                    'profile': ['http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric']\n                },\n                'extension': [{\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-qualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 5\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 10\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 12\n                            }\n                        ]\n                    }, {\n                        'url': 'http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-devicemetric-templateQualities',\n                        'extension': [{\n                                'url': 'category',\n                                'valueCodeableConcept': {\n                                    'coding': [{\n                                            'system': 'http://ehealth.sundhed.dk/cs/devicemetric-quality-types',\n                                            'code': 'initial'\n                                        }\n                                    ]\n                                }\n                            }, {\n                                'url': 'value',\n                                'valueInteger': 14\n                            }\n                        ]\n                    }\n                ],\n                'identifier': {\n                    'value': 'Foo'\n                },\n                'type': {\n                    'text': 'code'\n                },\n                'source': {\n                    'reference': 'https://device.local.ehealth.sundhed.dk/fhir/Device/08D51B81A7FE5B480278150A94D4048A'\n                },\n                'category': 'calculation'\n            }\n        ]\n    }\n",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "affectsState" : true,
  "code" : "fetch-patient-devices",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "anonymization",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "string"
    },
    {
      "name" : "organization",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Reference"
    },
    {
      "name" : "period",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Period"
    },
    {
      "name" : "devicetype",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Coding"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Binary"
    }
  ]
}

```
