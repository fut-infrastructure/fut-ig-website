# DataAbsentReason - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DataAbsentReason**

## CodeSystem: DataAbsentReason 

| | |
| :--- | :--- |
| *Official URL*:http://terminology.hl7.org/CodeSystem/data-absent-reason | *Version*:6.0.0 |
| Active as of 2023-04-24 | *Computable Name*:DataAbsentReason |

 
Used to specify why the normally expected content of the data element is missing. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://terminology.hl7.org/CodeSystem/data-absent-reason` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "data-absent-reason",
  "url" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
  "version" : "6.0.0",
  "name" : "DataAbsentReason",
  "title" : "DataAbsentReason",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-04-24T09:40:00+00:00",
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
  "description" : "Used to specify why the normally expected content of the data element is missing.",
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
  "content" : "supplement",
  "supplements" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
  "concept" : [
    {
      "code" : "unknown",
      "display" : "Unknown",
      "definition" : "The value is expected to exist but is not known.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Ukendt"
        }
      ],
      "concept" : [
        {
          "code" : "asked-unknown",
          "display" : "Asked But Unknown",
          "definition" : "The source was asked but does not know the value.",
          "designation" : [
            {
              "language" : "da",
              "use" : {
                "system" : "http://snomed.info/sct",
                "code" : "900000000000013009"
              },
              "value" : "Svaret ukendt"
            }
          ]
        },
        {
          "code" : "temp-unknown",
          "display" : "Temporarily Unknown",
          "definition" : "There is reason to expect (from the workflow) that the value may become known.",
          "designation" : [
            {
              "language" : "da",
              "use" : {
                "system" : "http://snomed.info/sct",
                "code" : "900000000000013009"
              },
              "value" : "Midlertidigt ukendt"
            }
          ]
        },
        {
          "code" : "not-asked",
          "display" : "Not Asked",
          "definition" : "The workflow didn't lead to this value being known.",
          "designation" : [
            {
              "language" : "da",
              "use" : {
                "system" : "http://snomed.info/sct",
                "code" : "900000000000013009"
              },
              "value" : "Ikke spurgt"
            }
          ]
        },
        {
          "code" : "asked-declined",
          "display" : "Asked But Declined",
          "definition" : "The source was asked but declined to answer.",
          "designation" : [
            {
              "language" : "da",
              "use" : {
                "system" : "http://snomed.info/sct",
                "code" : "900000000000013009"
              },
              "value" : "Spurgt men sprunget over"
            }
          ]
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/codesystem-concept-comments",
          "valueString" : "Using \"masked\" may be breach of security or confidentiality, but there are times when its use is required to support alternate workflows for gaining access to denied information."
        }
      ],
      "code" : "masked",
      "display" : "Masked",
      "definition" : "The information is not available due to security, privacy or related reasons.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Skjult"
        }
      ]
    },
    {
      "code" : "not-applicable",
      "display" : "Not Applicable",
      "definition" : "There is no proper value for this element (e.g. last menstrual period for a male).",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Ikke brugbar"
        }
      ]
    },
    {
      "code" : "unsupported",
      "display" : "Unsupported",
      "definition" : "The source system wasn't capable of supporting this element.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Ikke understøttet"
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/codesystem-concept-comments",
          "valueString" : "It may be linked by internal references (e.g. xml:id). This usually implies that the value could not be represented in the correct format - this may be due to system limitations, or this particular data value."
        }
      ],
      "code" : "as-text",
      "display" : "As Text",
      "definition" : "The content of the data is represented in the resource narrative.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Svaret er givet som text i narrative"
        }
      ]
    },
    {
      "code" : "error",
      "display" : "Error",
      "definition" : "Some system or workflow process error means that the information is not available.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Fejl"
        }
      ],
      "concept" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/codesystem-concept-comments",
              "valueString" : "This is sometimes an output value from measuring devices."
            }
          ],
          "code" : "not-a-number",
          "display" : "Not a Number (NaN)",
          "definition" : "The numeric value is undefined or unrepresentable due to a floating point processing error.",
          "designation" : [
            {
              "language" : "da",
              "use" : {
                "system" : "http://snomed.info/sct",
                "code" : "900000000000013009"
              },
              "value" : "Udefinerbar"
            }
          ]
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/codesystem-concept-comments",
              "valueString" : "This is sometimes an output value from measuring devices."
            }
          ],
          "code" : "negative-infinity",
          "display" : "Negative Infinity (NINF)",
          "definition" : "The numeric value is excessively low and unrepresentable due to a floating point processing error.",
          "designation" : [
            {
              "language" : "da",
              "use" : {
                "system" : "http://snomed.info/sct",
                "code" : "900000000000013009"
              },
              "value" : "Negativ uendelig"
            }
          ]
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/codesystem-concept-comments",
              "valueString" : "This is sometimes an output value from measuring devices."
            }
          ],
          "code" : "positive-infinity",
          "display" : "Positive Infinity (PINF)",
          "definition" : "The numeric value is excessively high and unrepresentable due to a floating point processing error.",
          "designation" : [
            {
              "language" : "da",
              "use" : {
                "system" : "http://snomed.info/sct",
                "code" : "900000000000013009"
              },
              "value" : "Positiv uendelig"
            }
          ]
        }
      ]
    },
    {
      "code" : "not-performed",
      "display" : "Not Performed",
      "definition" : "The value is not available because the observation procedure (test, etc.) was not performed.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Sprunget over"
        }
      ]
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/StructureDefinition/codesystem-concept-comments",
          "valueString" : "This is most often associated with required bindings that do not include the actual code used, but may be used with other data types."
        }
      ],
      "code" : "not-permitted",
      "display" : "Not Permitted",
      "definition" : "The value is not permitted in this context (e.g. due to profiles, or the base data types).",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Ikke tilladt"
        }
      ]
    }
  ]
}

```
