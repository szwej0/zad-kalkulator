Feature: Obliczenia

  Scenario: Mnozenie a*b*c*d
    Given I am on homepage
    When I follow "Mnożenie by annabiala94"
    And I fill in "A" with "1"
    And I fill in "B" with "2"
    And I fill in "C" with "3"
    And I fill in "D" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 24"
