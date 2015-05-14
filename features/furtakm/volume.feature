Feature: Obliczenia

  Scenario: VolumeFurtakM
    Given I am on homepage
    When I follow "Volume by furtakm"
    And I fill in "a" with "5"
    And I fill in "b" with "4"
    And I fill in "h" with "3"
    And I press "Result"
    Then I should see "Result: 60"
